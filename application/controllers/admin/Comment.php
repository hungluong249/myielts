<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends Admin_Controller {
	private $request_language_template = array(
        'title', 'description'
    );
    private $author_data = array();
    function __construct(){
        parent::__construct();
        $this->load->model('comment_model');
        $this->load->helper('common');
        $this->author_data = handle_author_common_data();
    }
	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $total_rows  = $this->comment_model->count_search();
        if($keywords != ''){
            $total_rows  = $this->comment_model->count_search($keywords);
        }
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/comment/index');
        $per_page = 6;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $result = $this->comment_model->get_all_with_pagination_search($per_page, $this->data['page']);
        if($keywords != ''){
            $result = $this->comment_model->get_all_with_pagination_search($per_page, $this->data['page'], $keywords);
        }
        $this->data['result'] = $result;
		$this->render('admin/comment/list_comment_view');
	}

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Họ Tên', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Name', 'trim|required');
        $this->form_validation->set_rules('image_shared', 'Ảnh đại diện', 'callback_file_selected_test[image_shared]');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/comment/create_comment_view');
        } else {
        	if ($this->input->post()) {
        		$check_upload = true;
                if ($_FILES['image_shared']['size'] > 1228800) {
                    $check_upload = false;
                }
                if ($check_upload == true) {

                    $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/comments', 'assets/upload/comments/thumb');
                    $shared_request = array(
                        'image' => $image
                    );

                    $this->db->trans_begin();

                    $insert = $this->comment_model->common_insert(array_merge($shared_request, $this->author_data));
                    if($insert){
                        $requests = handle_multi_language_request('comment_id', $insert, $this->request_language_template, $this->input->post(), $this->page_languages);
                        $this->comment_model->insert_with_language($requests);
                    }

                    if ($this->db->trans_status() === false) {
                        $this->db->trans_rollback();
                        $this->load->libraries('session');
                        $this->session->set_flashdata('message_error', 'Thêm mới thất bại!');
                        $this->render('admin/comment/create_comment_view');
                    } else {
                        $this->db->trans_commit();
                        $this->session->set_flashdata('message_success', 'Thêm mới thành công!');
                        redirect('admin/comment', 'refresh');
                    }
                }else{
                    $this->session->set_flashdata('message_error', 'Hình ảnh vượt quá 1200 Kb. Vui lòng kiểm tra lại và thực hiện lại thao tác!');
                    redirect('admin/comment');
                }
        	}
        }
	}


	public function edit($id = null){
        $detail = $this->comment_model->get_by_id($id, $this->request_language_template);
        if(!$detail['id']){
            redirect('admin/comment/index','refresh');
        }
        $detail = build_language('comment', $detail, $this->request_language_template, $this->page_languages);
        $this->data['detail'] = $detail;
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('title_en', 'Title', 'required');
        if($this->form_validation->run() === true){
            if($this->input->post()){
                if(!empty($_FILES['image_shared']['name'])){
        			$this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
        		}
        		$image = $this->upload_image('image_shared', $_FILES['image_shared']['name'],'assets/upload/comments', 'assets/upload/comments/thumb');
        		if ($image) {
        			$shared_request['image'] = $image;
        		}
                
                $this->db->trans_begin();
                if ($image) {
                	$update = $this->comment_model->common_update($id, $shared_request);
                }else{
                	$update = true;
                }
                
                if($update){
                    $requests = handle_multi_language_request('comment_id', $id, $this->request_language_template, $this->input->post(), $this->page_languages);
                    foreach ($requests as $key => $value){
                        $this->comment_model->update_with_language($id, $requests[$key]['language'], $value);
                    }
                }
                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message_error', 'Cập nhật thất bại!');
                    $this->render('admin/comment/edit/'.$id);
                } else {
                    $this->db->trans_commit();
                    $this->session->set_flashdata('message_success', 'Cập nhật thành công!');
                    if(!empty($image) && $image != $detail['image'] && file_exists('assets/upload/comments/'.$detail['image'])){
                        unlink('assets/upload/comments/'.$detail['image']);
                    }
                    redirect('admin/comment', 'refresh');
                }
            }
        }
        $this->render('admin/comment/edit_comment_view');
    }

    public function detail($id){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $detail = $this->comment_model->get_by_id($id, $this->request_language_template);
        if(!$detail['id']){
            redirect('admin/comment/index','refresh');
        }
        $detail = build_language('comment', $detail, $this->request_language_template, $this->page_languages);
        $this->data['detail'] = $detail;
        $this->render('admin/comment/detail_comment_view');
    }

    public function remove(){
        $id = $this->input->post('id');
        $data = array('is_deleted' => 1);
        $update = $this->comment_model->common_update($id, $data);
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


	function file_selected_test($str, $field){
        if (empty($_FILES[$field]['name'])) {
            $this->form_validation->set_message(__FUNCTION__, 'The {field} field is required.');
            return false;
        }else{
            return true;
        }
    }

    protected function check_img($filename, $filesize){
        $images = array('jpg', 'jpeg', 'png', 'gif');
        if (is_array($filename)) {
            foreach ($filename as $key => $value) {
                $map[] = explode('.',$value);
            }
            foreach ($map as $key => $value) {
                $new_map[] = $value[1];
            }
        }else{
            $map = explode('.',$filename);
            $new_map[] = $map[1];
        }
        
        if(array_diff($new_map, $images) != null){
            $this->session->set_flashdata('message_error', 'Đuôi file image phải là jpg | jpeg | png | gif!');
            redirect('admin/comment');
        }
        $image_size = array('success');
        if (is_array($filesize)) {
            foreach ($filesize as $key => $value) {
                if ($value > 1228800) {
                    $check_size[] = 'error';
                }else{
                    $check_size[] = 'success';
                }
            }
        }else{
            if ($filesize > 1228800) {
                $check_size[] = 'error';
            }else{
                $check_size[] = 'success';
            }
        }
        
        if (array_diff($check_size, $image_size) != null) {
            $this->session->set_flashdata('message_error', 'Hình ảnh vượt quá 1200 Kb. Vui lòng kiểm tra lại và thực hiện lại thao tác!');
            redirect('admin/comment');
        }
    }

}

/* End of file Comment.php */
/* Location: ./application/controllers/admin/Comment.php */