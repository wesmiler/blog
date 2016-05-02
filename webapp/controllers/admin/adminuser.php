<?php
defined('BASEPATH') OR exit('Not direct access allowed!');

class adminuser extends Admin_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function adminuser_list()
    {
        $this->load->view('adminuser/index');
    }
}

