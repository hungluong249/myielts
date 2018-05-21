<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends Public_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->render('document_view');
    }

    public function detail() {

        $this->render('detail_document_view');
    }

}