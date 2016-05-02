<?php
defined('BASEPATH') OR exit('Not direct  access allowed！');
/**
 * 文章模块控制器
 *  Article Controller description
 *  @author Chen
 */
class Article extends Home_Controller{ 
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data = $this->initialize;
            echo 'dadad'.uri_string();
            $this->load->view('public/header', $data);
            $this->load->view('index/index');
            $this->load->view('public/footer');

        }

        public function info(){
            $data = $this->initialize;
            echo 'id:'.$this->input->get('id');
            echo 'id:'.$this->uri->segment(2);
            $this->load->view('public/header', $data);
            $this->load->view('index/index');
            $this->load->view('public/footer');
        }

        public function preview(){
            $data = $this->initialize;
            $this->load->view('public/header', $data);
            $this->load->view('article/preview');
            $this->load->view('public/footer');

        }


}

