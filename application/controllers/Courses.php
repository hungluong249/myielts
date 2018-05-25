<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends Public_Controller {

	private $_lang = '';

    public function __construct() {
        parent::__construct();
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index() {
    	$this->data['current_link'] = 'courses';
        $this->render('courses_view');
    }

    public function detail() {

        $this->render('detail_courses_view');
    }

}