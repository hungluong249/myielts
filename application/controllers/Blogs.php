<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Public_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->render('blogs_view');
    }

    public function detail() {

        $this->render('detail_blogs_view');
    }

}