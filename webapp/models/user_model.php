<?php
/**
* 用户模型
* User Model Description
* @author Chen
*/
class User_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function get_detail($where=array())
    {
        $this->db->select();
        $this->db->from("user");
        $this->db->join("user_info",'user_info.uid=user.id','left');
        $mark = 'where';
        if(!empty($where))
        {
            if ( !$this->db->$mark($where))
            {

                return array();
            }
        }
        $this->db->order_by('user.id');
        $list = $this->db->get()->result_array();
        $config['per_page'] = 4;
        $config['base_url'] = 'admin/user/index';
        $config['total_rows'] = count($list);
        $Page = $this->pagination->initialize($config);
        $data['list'] = array_slice($list, $this->uri->segment(4), $Page->per_page);
        $data['page'] = $this->pagination->create_links();
        return $data;

    }

    public function get_sum()
    {

    }



}


?>