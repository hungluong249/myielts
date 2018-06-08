<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Public_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('blog_model');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index($slug = '') {
    	$this->data['current_link'] = 'blogs';
        $this->data['current_slug'] = $slug;

        $this->load->model('category_model');
        $category = $this->category_model->get_by_slug($slug, array('title'));
        $total_rows  = $this->blog_model->count_search_by_category($slug);
        $this->load->library('pagination');
        $config = array();
        if ($this->uri->segment(1) != 'vi' && $this->uri->segment(1) != 'en') {
            $base_url = base_url('blogs/index');
            $uri_segment = 3;
        }else{
            $base_url = base_url($this->data['lang']. '/blogs/index');
            $uri_segment = 4;
        }
        //$per_page = 10;
        $per_page = 8;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment($uri_segment)) ? $this->uri->segment($uri_segment) : 0;

        $result = $this->blog_model->get_all_field_by_category($category['id'], 'desc', array('title', 'description', 'content'), $this->data['lang'], $per_page, $this->data['page']);
        $this->data['result'] = $result;

        $this->render('blogs_view');
    }

    public function detail($slug) {
        $this->data['current_link'] = 'detail_blogs';
        $this->data['current_slug'] = $slug;

        $detail = $this->blog_model->get_by_slug($slug, array('title', 'description', 'content'), $this->data['lang']);
        $this->data['detail'] = $detail;
        $this->data['meta_keywords'] = $detail['meta_keywords'];
        $this->data['meta_description'] = $detail['meta_description'];

        $this->render('detail_blogs_view');
    }

}