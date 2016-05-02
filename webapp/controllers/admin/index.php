<?php
defined('BASEPATH') OR exit('No direct access allowed');

/**
 * 后台首页
 * Index class description
 * @author Chen
 */
class Index extends Admin_Controller {
        protected $user_mode = null;
        public function __construct()
         {
             parent::__construct();
         }

        public function index()
        {   
            $login = TRUE;
            if($login === FALSE)
            {
                redirect('admin/login/index');
            }else
            {

                // $this->load->view('public/header',$this->initialize);
                $this->load->view('index/index',$this->initialize);
                // $this->load->view('public/footer');
            }
            
        }

        public function layout()
        {
            session_destroy();
            redirect('admin/index');
        }
}

