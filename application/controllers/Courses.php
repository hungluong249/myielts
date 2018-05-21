<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends Public_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->render('courses_view');
    }

    public function detail() {

        $this->render('detail_courses_view');
    }

}