<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opening extends Admin_Controller {
	private $request_language_template = array(
        'title', 'description', 'content'
    );
    private $author_data = array();
    function __construct(){
        parent::__construct();
        $this->load->model('opening_model');
        $this->load->helper('common');
        $this->author_data = handle_author_common_data();
    }

	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $total_rows  = $this->opening_model->count_search();
        if($keywords != ''){
            $total_rows  = $this->opening_model->count_search($keywords);
        }

        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/opening/index');
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $result = $this->opening_model->get_all_with_pagination_search($per_page, $this->data['page']);
        if($keywords != ''){
            $result = $this->opening_model->get_all_with_pagination_search($per_page, $this->data['page'], $keywords);
        }
        $this->data['result'] = $result;
        $this->render('admin/opening/list_opening_view');
	}

	public function create() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Title', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/opening/create_opening_view');
        } else {
            if ($this->input->post()) {
                $check_upload = true;
                if ($_FILES['image_shared']['size'] > 1228800) {
                    $check_upload = false;
                }
                if ($check_upload == true) {
                    $slug = $this->input->post('slug_shared');
                    $unique_slug = $this->opening_model->build_unique_slug($slug);

                    $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/openings', 'assets/upload/openings/thumb');
                    $shared_request = array(
                        'image' => $image,
                        'slug' => $unique_slug,
                        'meta_keywords' => $this->input->post('metakeywords_shared'),
                        'meta_description' => $this->input->post('metadescription_shared')
                    );

                    $this->db->trans_begin();

                    $insert = $this->opening_model->common_insert(array_merge($shared_request, $this->author_data));
                    if($insert){
                        $requests = handle_multi_language_request('opening_id', $insert, $this->request_language_template, $this->input->post(), $this->page_languages);
                        $this->opening_model->insert_with_language($requests);
                    }

                    if ($this->db->trans_status() === false) {
                        $this->db->trans_rollback();
                        $this->load->libraries('session');
                        $this->session->set_flashdata('message_error', 'Thêm mới thất bại!');
                        $this->render('admin/opening/create_opening_view');
                    } else {
                        $this->db->trans_commit();
                        $this->session->set_flashdata('message_success', 'Thêm mới thành công!');
                        redirect('admin/opening', 'refresh');
                    }
                }else{
                    $this->session->set_flashdata('message_error', 'Hình ảnh vượt quá 1200 Kb. Vui lòng kiểm tra lại và thực hiện lại thao tác!');
                    redirect('admin/opening');
                }
            }
        }
    }

    public function edit($id = null){
        $detail = $this->opening_model->get_by_id($id);
        if(!$detail){
            redirect('admin/opening/index','refresh');
        }
        $detail = build_language('opening', $detail, $this->request_language_template, $this->page_languages);
        $this->data['detail'] = $detail;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('title_en', 'Title', 'required');
        if($this->form_validation->run() === true){
            if($this->input->post()){
                $check_upload = true;
                if ($_FILES['image_shared']['size'] > 1228800) {
                    $check_upload = false;
                }
                if ($check_upload == true) {
                    $slug = $this->input->post('slug_shared');
                    $unique_slug = $this->opening_model->build_unique_slug($slug, $id);
                    $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/openings', 'assets/upload/openings/thumb');
                    $shared_request = array(
                        'slug' => $unique_slug,
                        'meta_keywords' => $this->input->post('metakeywords_shared'),
                        'meta_description' => $this->input->post('metadescription_shared'),
                        'updated_at' => $this->author_data['updated_at'],
                        'updated_by' => $this->author_data['updated_by']
                    );
                    if($image){
                        $shared_request['image'] = $image;
                    }
                    $this->db->trans_begin();

                    $update = $this->opening_model->common_update($id, $shared_request);
                    if($update){
                        $requests = handle_multi_language_request('opening_id', $id, $this->request_language_template, $this->input->post(), $this->page_languages);
                        foreach ($requests as $key => $value){
                            $this->opening_model->update_with_language($id, $requests[$key]['language'], $value);
                        }
                    }

                    if ($this->db->trans_status() === false) {
                        $this->db->trans_rollback();
                        $this->load->libraries('session');
                        $this->session->set_flashdata('message_error', 'Cập nhật thất bại!');
                        $this->render('admin/opening/edit/'.$id);
                    } else {
                        $this->db->trans_commit();
                        $this->session->set_flashdata('message_success', 'Cập nhật thành công!');
                        if($image != '' && $image != $detail['image'] && file_exists('assets/upload/openings/'.$detail['image'])){
                            unlink('assets/upload/openings/'.$detail['image']);
                        }
                        redirect('admin/opening', 'refresh');
                    }
                }else{
                    $this->session->set_flashdata('message_error', 'Hình ảnh vượt quá 1200 Kb. Vui lòng kiểm tra lại và thực hiện lại thao tác!');
                    redirect('admin/opening');
                }
            }
        }
        $this->render('admin/opening/edit_opening_view');
    }

    public function detail($id){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->opening_model->get_by_id($id);
        $detail = build_language('opening', $detail, $this->request_language_template, $this->page_languages);
        $this->data['detail'] = $detail;

        $this->render('admin/opening/detail_opening_view');
    }
    
    public function remove(){
        $id = $this->input->post('id');
        $data = array('is_deleted' => 1);
        $update = $this->opening_model->common_update($id, $data);
        if($update == 1){
            $reponse = array(
                'csrf_hash' => $this->security->get_csrf_hash()
            );
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array('status' => 200, 'reponse' => $reponse)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array('status' => 400)));
    }

}

/* End of file Opening.php */
/* Location: ./application/controllers/admin/Opening.php */