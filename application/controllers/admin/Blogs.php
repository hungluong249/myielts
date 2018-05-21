<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends Admin_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->render('admin/blogs/overview_view');
    }

    public function blogs(){
        $this->render('admin/blogs/blogs/list_blogs_view');
    }

    public function creatBlogs(){
        $this->render('admin/blogs/blogs/creat_blogs_view');
    }

    public function editBlogs(){
        $this->render('admin/blogs/blogs/edit_blogs_view');
    }

    public function category_1(){
        $this->render('admin/blogs/blogs/list_category_1_view');
    }

    public function creatCategory_1(){
        $this->render('admin/blogs/category/creat_category_1_view');
    }

    public function editCategory_1(){
        $this->render('admin/blogs/category/edit_category_1_view');
    }

    public function category_2(){
        $this->render('admin/blogs/category/list_category_2_view');
    }

    public function creatCategory_2(){
        $this->render('admin/blogs/category/creat_category_2_view');
    }

    public function editCategory_2(){
        $this->render('admin/blogs/category/edit_category_2_view');
    }

}