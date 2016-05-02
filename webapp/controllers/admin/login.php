<?php
defined('BASEPATH') OR exit('Not derict access allowed!');
/**
* 后台登录类
* login class description
* @author Chen
*/
class Login extends Admin_Controller
{
    protected $default_config = NULL;
    public function __construct()
    {
        parent::__construct(FALSE);
    }

    public function index()
    {
        $data = $this->db->query('select * from ds_user')->result_array();
        $this->sys_config['list'] = $data;
        echo count($data);
        $config['per_page'] = 2;
        $config['total_rows'] = 50;
        $config['base_url'] = '/admin/login/index';
        $this->pagination->initialize($config);
        $page = $this->pagination->create_links();
        // dump($this->input->get());
        $this->sys_config['page'] = $page;
        $this->load->view('login/index',$this->sys_config);
    }
}
?>
