<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benefit extends Admin_Controller {
	private $request_language_template = array();
    private $author_data = array();

    public function __construct(){
    	parent::__construct();
    	$this->load->model('benefit_model');
        $this->load->helper('common');
        $this->author_data = handle_author_common_data();
    }

	public function index(){
		$this->load->helper('form');
        $this->load->library('form_validation');
        $detail = $this->benefit_model->get_by_id_with_benefit();
        if(!$detail['id']){
            redirect('admin/benefit/index','refresh');
        }
        $this->data['detail'] = $detail;
        // print_r($detail);die;
        $this->render('admin/benefit/detail_benefit_view');
	}

	public function edit($id = null){
        $detail = $this->benefit_model->get_by_id_with_benefit($id);
        if(!$detail['id']){
            redirect('admin/benefit/index','refresh');
        }
        $detail = build_language('benefit', $detail, $this->request_language_template, $this->page_languages);
        $this->data['detail'] = $detail;
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post()){
            if(!empty($_FILES['image_shared']['name'])){
    			$this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
    		}
    		$image = $this->upload_image('image_shared', $_FILES['image_shared']['name'],'assets/upload/benefits', 'assets/upload/benefits/thumb');
    		if ($image) {
    			$shared_request['image'] = $image;
    		}
            
            if ($image) {
            	$update = $this->benefit_model->common_update($id, $shared_request);
            }else{
            	$update = false;
            }
            // var_dump($update);die;
            if($update){
                $this->session->set_flashdata('message_success', 'Cập nhật thành công!');
                if(isset($image) && $image != $detail['image'] && file_exists('assets/upload/benefits/'.$detail['image'])){
                    unlink('assets/upload/benefits/'.$detail['image']);
                }
                redirect('admin/benefit', 'refresh');
            }else{
            	$this->session->set_flashdata('message_error', 'Cập nhật thất bại!');
                $this->render('admin/benefit/edit/'.$id);
            }
        }
        $this->render('admin/benefit/edit_benefit_view');
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
            redirect('admin/benefit');
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
            redirect('admin/benefit');
        }
    }


}

/* End of file Benefit.php */
/* Location: ./application/controllers/admin/Benefit.php */