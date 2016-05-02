<?php
defined('BASEPATH') OR exit('Not direct  access allowed！');
/**
 * 前台首页控制器
 *  Index Controller description
 *  @author Chen
 */
class Index extends Home_Controller{ 
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->initialize['title'] = 'Wesmiler 的博客主页';
            $data = $this->initialize;
            // echo 'dadad'.uri_string();
            $this->load->view('public/header', $data);
            $this->load->view('index/index');
            $this->load->view('public/footer');

        }

}

