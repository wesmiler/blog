<?php
defined('BASEPATH') OR exit('Not direct  access allowed！');
/**
 *  综合搜索模块控制器
 *  Search Controller description
 *  @author Chen
 */
class Search extends Home_Controller{ 
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $data = $this->initialize;
            $this->load->view('public/header', $data);
            // $type = trim($this->uri->segment(2);
            dump($this->input->post());
            $action = trim($_POST['type'])=="article"? 'index' :  trim($_POST['type']);
            $this->load->view($action.'/index');
            $this->load->view('public/footer');

        }

}

