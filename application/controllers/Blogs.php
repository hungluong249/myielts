<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Public_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('blog_model');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index() {
    	$this->data['current_link'] = 'blogs';

        $this->render('blogs_view');
    }

    public function detail() {

        $this->render('detail_blogs_view');
    }

}