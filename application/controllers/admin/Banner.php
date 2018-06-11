<?php
/**
* 
*/
class Banner extends Admin_Controller{
	private $request_language_template = array();
    private $author_data = array();
	
	function __construct(){
		parent::__construct();
		$this->load->model('banner_model');
		$this->load->helper('common');
        $this->author_data = handle_author_common_data();
	}

	/*========================================
	=            Show list banner            =
	========================================*/
	
	public function index(){
		$this->load->library('pagination');
		$config = array();
		$base_url = base_url('admin/banner/index');
		$per_page = 10;
		$uri_segment = 4;
		$total_rows  = $this->banner_model->count_all();
		foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $result = $this->banner_model->get_all_with_pagination($per_page, $this->data['page']);
        $this->data['result'] = $result;

        //echo "<pre>";
        //print_r($result);die;


		$this->render('admin/banner/list_banner_view');
	}
	
	/*=====  End of Show list banner  ======*/
	
	public function create(){
		$this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('image_shared', 'Banner', 'callback_file_selected_test[image_shared]');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/banner/create_banner_view');
        } else {
        	if ($this->input->post()) {
        		if(!empty($_FILES['image_shared']['name'])){
                    $this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
                }

                $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'],'assets/upload/banners', 'assets/upload/banners/thumb');

                $shared_request = array(
                    'image' => $image,
                );

                $insert = $this->banner_model->common_insert(array_merge($shared_request, $this->author_data));

                if($insert){
                	$this->session->set_flashdata('message_success', 'Thêm mới thành công!');
                    redirect('admin/banner', 'refresh');
                }else{
                	$this->session->set_flashdata('message_error', 'Thêm mới thất bại!');
                    $this->render('admin/banner/create_banner_view');
                }
        	}
        }
	}


	public function remove(){
        $id = $this->input->post('id');
        $detail = $this->banner_model->get_by_id_only_with_banner($id);
        $data = array('is_deleted' => 1);
        $update = $this->banner_model->common_update($id, $data);
        if($update == 1){
        	if(file_exists('assets/upload/banners/'.$detail['image'])){
                unlink('assets/upload/banners/'.$detail['image']);
            }
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
            redirect('admin/banner');
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
            redirect('admin/banner');
        }
    }

	/*================================
	=            Active and Deactive            =
	================================*/
	
	public function active(){
        $id = $this->input->get('id');
        $data = array('is_activated' => 1);
        $update = $this->banner_model->common_update($id, $data);
        if($update == 1){
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array('status' => 200)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array('status' => 400)));
    }

    public function deactive(){
        $id = $this->input->get('id');
        $data = array('is_activated' => 0);
        $update = $this->banner_model->common_update($id, $data);
        if($update == 1){
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array('status' => 200)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array('status' => 400)));
    }
	
	/*=====  End of Active and Deactive   ======*/
	
	
}