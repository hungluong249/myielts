<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends Admin_Controller {
	private $request_language_template = array(
        'time', 'title', 'description', 'content'
    );
    private $author_data = array();

    function __construct(){
        parent::__construct();
        $this->load->model('courses_model');
        $this->load->helper('common');
        $this->author_data = handle_author_common_data();
    }
	public function index(){
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $total_rows  = $this->courses_model->count_search();
        if($keywords != ''){
            $total_rows  = $this->courses_model->count_search($keywords);
        }

        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/courses/index');
        $per_page = 6;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $result = $this->courses_model->get_all_with_pagination_search($per_page, $this->data['page']);
        if($keywords != ''){
            $result = $this->courses_model->get_all_with_pagination_search($per_page, $this->data['page'], $keywords);
        }
        $this->data['courses'] = $result;
		$this->render('admin/courses/list_courses_view');
	}

	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Title', 'trim|required');
        $this->form_validation->set_rules('image_shared', 'Ảnh đại diện', 'callback_file_selected_test[image_shared]');
        $this->form_validation->set_rules('imagetop_shared', 'Banner Trên', 'callback_file_selected_test[imagetop_shared]');
        $this->form_validation->set_rules('imagetop_shared', 'Banner Dưới', 'callback_file_selected_test[imagetop_shared]');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/courses/create_courses_view.php');
        } else {
        	if ($this->input->post()) {
                if(!empty($_FILES['image_shared']['name'])){
                    $this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
                }

                if(!empty($_FILES['imagetop_shared']['name'])){
                    $this->check_img($_FILES['imagetop_shared']['name'], $_FILES['imagetop_shared']['size']);
                }

                if(!empty($_FILES['imagetop_shared']['name'])){
                    $this->check_img($_FILES['imagetop_shared']['name'], $_FILES['imagetop_shared']['size']);
                }

                $slug = $this->input->post('slug_shared');
                $unique_slug = $this->courses_model->build_unique_slug($slug);

                $image = $this->upload_multiple_image('assets/upload/courses', 'image_shared', 'assets/upload/courses/thumb');
                $image_top = $this->upload_image('imagetop_shared', $_FILES['imagetop_shared']['name'],'assets/upload/courses', 'assets/upload/courses/thumb');
                $image_bottom = $this->upload_image('imagebottom_shared', $_FILES['imagebottom_shared']['name'],'assets/upload/courses', 'assets/upload/courses/thumb');

                $image_json = json_encode($image);
                $shared_request = array(
                    'image' => $image_json,
                    'avatar' => $image[0],
                    'image_top' => $image_top,
                    'image_bottom' => $image_bottom,
                    'opening' => $this->input->post('opening_shared'),
                    'code' => $this->input->post('code_shared'),
                    'slug' => $unique_slug,
                    'promise' => $this->input->post('promise_shared'),
                    'price' => str_replace(',','',$this->input->post('price_shared')),
                    'discount' => str_replace(',','',$this->input->post('discount_shared')),
                    'meta_keywords' => $this->input->post('metakeywords_shared'),
                    'meta_description' => $this->input->post('metadescription_shared')
                );

                $this->db->trans_begin();

                $insert = $this->courses_model->common_insert(array_merge($shared_request, $this->author_data));
                if($insert){
                    $requests = handle_multi_language_request('courses_id', $insert, $this->request_language_template, $this->input->post(), $this->page_languages);
                    $this->courses_model->insert_with_language($requests);
                }

                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message_error', 'Thêm mới thất bại!');
                    $this->render('admin/courses/create_courses_view');
                } else {
                    $this->db->trans_commit();
                    $this->session->set_flashdata('message_success', 'Thêm mới thành công!');
                    redirect('admin/courses', 'refresh');
                }
        	}
        }
        
	}

	public function edit($id = null){
        $detail = $this->courses_model->get_by_id($id);
        if(!$detail['id']){
            redirect('admin/courses/index','refresh');
        }
        $detail = build_language('courses', $detail, $this->request_language_template, $this->page_languages);

        $this->data['detail'] = $detail;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('title_en', 'Title', 'required');
        if($this->form_validation->run() === true){
            if($this->input->post()){
                $image = $this->upload_multiple_image('assets/upload/courses', 'image_shared', 'assets/upload/courses/thumb');
                $image_array = array();
                $image_array = $detail['image'];
                $image_array = json_decode($image_array);
                if($image){
                    $this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
                    foreach ($image as $key => $value) {
                        array_push($image_array, $value);
                    }
                }

                $slug = $this->input->post('slug_shared');
                $unique_slug = $this->courses_model->build_unique_slug($slug, $id);

                $image_top = $this->upload_image('imagetop_shared', $_FILES['imagetop_shared']['name'],'assets/upload/courses', 'assets/upload/courses/thumb');
                $image_bottom = $this->upload_image('imagebottom_shared', $_FILES['imagebottom_shared']['name'],'assets/upload/courses', 'assets/upload/courses/thumb');

                $shared_request = array(
                    'slug' => $unique_slug,
                    'opening' => $this->input->post('opening_shared'),
                    'code' => $this->input->post('code_shared'),
                    'price' => str_replace(',','',$this->input->post('price_shared')),
                    'promise' => $this->input->post('promise_shared'),
                    'meta_keywords' => $this->input->post('metakeywords_shared'),
                    'meta_description' => $this->input->post('metadescription_shared'),
                    'updated_at' => $this->author_data['updated_at'],
                    'updated_by' => $this->author_data['updated_by']
                );
                if(isset($image)){
                    $shared_request['image'] = json_encode($image_array);
                }
                if(!empty($image_top)){
                    $shared_request['image_top'] = $image_top;
                }
                if(!empty($image_bottom)){
                    $shared_request['image_bottom'] = $image_bottom;
                }
                $this->db->trans_begin();

                $update = $this->courses_model->common_update($id, $shared_request);
                if($update){
                    $requests = handle_multi_language_request('courses_id', $id, $this->request_language_template, $this->input->post(), $this->page_languages);
                    foreach ($requests as $key => $value){
                        $this->courses_model->update_with_language($id, $requests[$key]['language'], $value);
                    }
                }

                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message_error', 'Cập nhật thất bại!');
                    $this->render('admin/courses/edit/'.$id);
                } else {
                    $this->db->trans_commit();
                    $this->session->set_flashdata('message_success', 'Cập nhật thành công!');
                    if(isset($image) && $image != $detail['image'] && file_exists('assets/upload/courses/'.$detail['image'])){
                        unlink('assets/upload/courses/'.$detail['image']);
                    }
                    redirect('admin/courses', 'refresh');
                }
            }
        }
        $this->render('admin/courses/edit_courses_view');
    }

	public function detail($id){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $detail = $this->courses_model->get_by_id($id);
        if(!$detail['id']){
            redirect('admin/courses/index','refresh');
        }
        $detail = build_language('courses', $detail, $this->request_language_template, $this->page_languages);
        $this->data['detail'] = $detail;

        $this->render('admin/courses/detail_courses_view');
    }

    public function remove(){
        $id = $this->input->post('id');
        $data = array('is_deleted' => 1);
        $update = $this->courses_model->common_update($id, $data);
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
            redirect('admin/courses');
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
            redirect('admin/courses');
        }
    }

    public function remove_image(){
        $id = $this->input->get('id');
        $image = $this->input->get('image');
        $detail = $this->courses_model->get_by_id($id);
        if ($image == $detail['avatar']) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array('status' => 200, 'message' => "Ảnh này đang được chọn làm Avatar. Không thể xóa!")));
        }else{
            $old_images = json_decode($detail['image']);
            $key = array_search($image, $old_images);
            unset($old_images[$key]);
            $new_images = [];
            foreach ($old_images as $key => $value) {
                $new_images[] = $value;
            }
            $image_json = json_encode($new_images);
            $data = array('image' => $image_json);
            $update = $this->courses_model->common_update($id, $data);
            if($update){
                if($image != '' && file_exists('assets/upload/courses/'.$image)){
                    unlink('assets/upload/courses/'.$image);
                }
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array('status' => 200, 'message' => '')));
            }
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode(array('status' => 400)));
        }
    }

    public function active_image(){
        $id = $this->input->get('id');
        $image = $this->input->get('image');
        $data = array('avatar' => $image);
        $update = $this->courses_model->common_update($id, $data);
        if($update){
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array('status' => 200, 'message' => '')));
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

}

/* End of file Courses.php */
/* Location: ./application/controllers/admin/Courses.php */