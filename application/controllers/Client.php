<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends Public_Controller {
	public function __construct() {
        parent::__construct();
    }

	public function register(){
        $username = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $age = $this->input->post('age');
        $company = $this->input->post('company');
        $password = $this->input->post('password');

        $additional_data = array(
            'first_name' => '',
            'last_name' => $username,
            'company' => $company,
			'phone' => $phone,
			'age' => $age
        );

        if($username == '' || $email == '' || $phone == '' || $password == ''){
        	$isExits = false;
        }else{
        	$group = array('2');
        	$this->load->library('ion_auth');
        	if($this->ion_auth->register($username, $password, $email, $additional_data, $group)){
        		$isExits = true;
        		$reponse = array(
	                'csrf_hash' => $this->security->get_csrf_hash()
	            );
        	}
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array('status' => 200, 'reponse' => $reponse, 'isExits' => $isExits)));
    }


    function register_email_exists(){
    	$this->load->model('ion_auth_model');
    	$email = $this->input->get('register_mail');
    	$check = $this->ion_auth_model->email_check($email);
    	if($check == true){
    		echo json_encode(FALSE);
    	}else{
    		echo json_encode(TRUE);
    	}
    }

}

/* End of file Client.php */
/* Location: ./application/controllers/Client.php */