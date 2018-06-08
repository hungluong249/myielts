<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Opening extends Public_Controller {

    private $_lang = '';

    public function __construct() {
        parent::__construct();
        $this->load->model('courses_model');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index() {
        $this->data['current_link'] = 'opening';

        $total_rows  = $this->courses_model->count_search();
        $this->load->library('pagination');
        $config = array();
        if ($this->uri->segment(1) != 'vi' && $this->uri->segment(1) != 'en') {
            $base_url = base_url('courses/index');
            $uri_segment = 3;
        }else{
            $base_url = base_url($this->data['lang']. '/courses/index');
            $uri_segment = 4;
        }

        $per_page = 6;

        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment($uri_segment)) ? $this->uri->segment($uri_segment) : 0;


        $result = $this->courses_model->get_all_field('desc', array('title', 'description', 'content', 'time', 'introduce'), $this->data['lang'], $per_page, $this->data['page']);
        $this->data['result'] = $result;


        //echo "<pre>";
        //print_r($result);die;

        $this->render('opening_view');
    }

}