<?php
defined('BASEPATH') OR exit('No direct access allowed');

/**
 * 后台首页
 * Index class description
 * @author Chen
 */
class Article extends Admin_Controller {
        protected $user_mode = null;
        public function __construct()
         {
             parent::__construct();
             $this->load->helper('text');
         }

        public function index()
        {   

            $data = array('list'=>array(),'page'=>'');
            $data = array_merge($this->initialize, $data);
            $this->load->view('article/index',$data);           

        }

        public function add()
        {   
            $data = $this->initialize;
            $this->load->view('article/add', $data);           

        }

        public function save()
        {   
            $data = $this->initialize;
            $this->load->view('article/index', $data);           

        }

        public function edit()
        {   
            // dump($this->uri->segment(4));
            // echo $this->get->uri_string(5);
            $data = $this->initialize;
            $this->load->view('article/edit', $data);           

        }

        public function del()
        {   
            $data = $this->initialize;
            $this->load->view('article/index', $data);           

        }

        public function comments()
        {
            $this->initialize['list'] = array();
            $this->initialize['page'] = '';
            $data = $this->initialize;
            $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
            $post = $this->input->post();
            $type = $this->input->get('type');
            if (empty($type)){
                $this->load->view('comments/index',$data);
            }
            else if ($type == 'audit')
            {
                echo '已审核';
                $this->load->view('comments/index',$data);
            }
        }

        public function classify()
        {
            $this->initialize['list'] = array();
            $this->initialize['page'] = '';
            $data = $this->initialize;
            $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
            $type = $this->input->get('type');
            if (empty($type))
            {
                // dump($this->input->post());
                $this->load->view('classify/index',$data);
                
            }
            else
            {
                switch ($type) {
                    case 'subtype':
                        // $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
                        $classify = array('id'=>11,'names'=>'PHP框架','parent_type'=>'PHP开发');
                        $this->load->view('classify/subtype', $data);
                        break;
                    case 'add':
                        // $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
                        $classify = array('id'=>11,'names'=>'PHP框架','parent_type'=>'PHP开发');
                        $this->load->view('classify/add', $data);
                        break;
                    case 'save':
                        // $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
                        $classify = array('id'=>11,'names'=>'PHP框架','parent_type'=>'PHP开发');
                        $this->load->view('classify/index', $data);
                        break;
                    case 'edit':
                        // $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
                        $classify = array('id'=>11,'names'=>'PHP框架','parent_type'=>'PHP开发');
                        $this->load->view('classify/edit', $data);
                        break;
                    case 'del':
                        // $data['base'] = array('names'=>'文章','parent_uri'=>'admin/article/index','cur_uri'=>'admin/article/classify');
                        $classify = array('id'=>11,'names'=>'PHP框架','parent_type'=>'PHP开发');
                        echo '删除成功';
                        $this->load->view('classify/index', $data);
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
        }



}

