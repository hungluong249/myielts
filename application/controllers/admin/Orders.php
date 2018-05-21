<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->render('admin/orders/overview_view');
    }

    public function pending(){
        $this->render('admin/orders/pending_view');
    }

    public function completed(){
        $this->render('admin/orders/completed_view');
    }

    public function cancelled(){
        $this->render('admin/orders/cancelled_view');
    }

    public function detail(){
        $this->render('admin/orders/detail_view');
    }

    public function print(){
        //$this->render('admin/orders/detail_view');
        $this->load->view('admin/orders/print_view');
    }



}