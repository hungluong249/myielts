<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {

	private $_lang = '';

    public function __construct() {
        parent::__construct();
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index() {
    	$this->data['current_link'] = 'homepage';

    	$about = $this->about();
    	$courses = $this->courses();
    	$blogs = $this->blogs();
        $banners = $this->banners();
        $benefit = $this->benefit();
        $team = $this->team();
        $comments = $this->comments();

    	$this->data['about'] = $about;
    	$this->data['courses'] = $courses;
    	$this->data['blogs'] = $blogs;
        $this->data['banners'] = $banners;
        $this->data['benefit'] = $benefit;
        $this->data['team'] = $team;
        $this->data['comments'] = $comments;
        $this->render('homepage_view');
    }

    function about(){
    	$this->load->model('about_model');
    	$about = $this->about_model->get_by_id_in_about($this->data['lang']);
    	return $about;
    }

    function courses(){
    	$this->load->model('courses_model');
    	//$courses = $this->courses_model->get_all_field('desc', array('title', 'description', 'content'), $this->data['lang'], 3, 0);
        $courses = $this->courses_model->get_all_field('acs', array('title', 'description', 'content'), $this->data['lang'], 5, 0);
    	return $courses;
    }

    function blogs(){
    	$this->load->model('blog_model');
    	$blogs = $this->blog_model->get_all_field('desc', array('title', 'description', 'content'), $this->data['lang'], 3, 0);
    	return $blogs;
    }

    function banners(){
        $this->load->model('banner_model');
        $banners = $this->banner_model->get_all_with_pagination(3);
        return $banners;
    }

    function benefit(){
        $this->load->model('benefit_model');
        $benefit = $this->benefit_model->get_by_id_with_benefit();
        return $benefit;
    }

    function team(){
        $this->load->model('team_model');
        $team = $this->team_model->get_all_field('desc', array('title', 'description'), $this->data['lang'], 3, 0);
        return $team;
    }

    function comments(){
        $this->load->model('comment_model');
        $comments = $this->comment_model->get_all_field('desc', array('title', 'description'), $this->data['lang'], 3, 0);
        return $comments;
    }
}