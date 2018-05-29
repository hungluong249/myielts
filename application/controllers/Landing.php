<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends Public_Controller
{

    private $_lang = '';

    public function __construct()
    {
        parent::__construct();
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index()
    {
        $this->data['current_link'] = 'homepage';


        $this->load->view('landing_page_view');
    }
}