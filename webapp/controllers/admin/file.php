<?php
defined('BASEPATH') OR exit('Not direct access allowed!');

/**
 * 用户管理
 * user class description
 * @author Chen 
 */
class User extends Admin_Controller{
    public function __construct()
    {
            parent::__construct();
            
    }

    public function index()
    {
        $request = $this->input->get_post(TRUE);
        // dump($);
        $smpid = $this->input->get_post('smpid');
        if(!$this->input->is_ajax_request())
        {
            $this->load->model('User_model');
            $data = $this->User_model->get_detail();
            $data = array_merge($this->initialize,$data); 
            $this->load->view('user/index',$data);
        }
        else
        {

            // $this->__construct(FALSE);
            // dump($this->input->get());
            // $list = $this->db->get('user')->result_array();
            // $page_config['total_rows'] = count($list);
            // $page_config['base_url'] = '/admin/user/index';
            // $this->pagination->initialize($page_config);
            // $data['list'] = $list;
            // $data['html'] = "<td>dddddd</td>";
            // $data['page'] = $this->pagination->create_links();
            $data['html'] = $this->load->view('user/index',TRUE);
            // dump($_REQUEST);
            echo json_encode($data);
        }
    }

    public function add(){

        // dump($_POST);
        // $this->load->view('public/header',$this->initialize);
        $this->load->view('user/add',$this->initialize);
        // $this->load->view('public/footer');
    }

    public function edit(){
        dump($_GET);
        $this->load->view('user/edit');
    }

    public function save(){
        dump($_GET);
    }

}
