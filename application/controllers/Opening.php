<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Opening extends Public_Controller {

    private $_lang = '';

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['current_link'] = 'opening';


        $this->render('opening_view');
    }

}