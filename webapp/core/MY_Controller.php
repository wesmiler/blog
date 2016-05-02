<?php
    /**
    * 自定义父控制器包括前后台父控制器
    * Controller Class desccription
    * these class will as ext class to call the web and adminproject controllers
    * @author Chen
    */
    defined('BASEPATH') OR exit(' No direct script access allowed');
   
    /*home_controller as web controller*/
    class Home_Controller extends CI_Controller{ 
        protected $configs = NULL;
        protected $initialize = NULL;
        public function __construct(){
            parent::__construct();
            define('DEFAULT_THEME', $this->config->config['sites']['theme']);
            $this->load->switch_themes(TRUE);
            $this->configs = $this->config->config;

            $this->initialize['sites'] = array_merge($this->configs['sites'],$this->configs['custom']);
            $this->initialize['title'] = 'Charset的博客首页';
            $page_config['base_url'] = str_replace($this->configs['url_suffix'],'',current_url());  //set pagination class base url
            $this->pagination->initialize($page_config);
        }
    }

    /*admin_controller as admin controller*/
    class Admin_Controller extends CI_Controller{
        protected $configs = NULL;
        protected $initialize = NULL;
        protected $db_configs = NULL;
        public function __construct(){
            parent::__construct();
            define('DEFAULT_THEME', $this->config->config['sites']['theme']);
            $this->load->switch_themes(FALSE);
            $this->configs = $this->config->config;
            $this->db->database = 'test';
            $this->db_configs = array(
                'dsn'=>$this->db->dsn, //获取dsn信息
                'database'=>$this->db->database, //获取数据库名
                'username'=>$this->db->username, //获取用户名
                'password'=>$this->db->password, //获取连接密码
                'hostname'=>$this->db->hostname, //获取主机名
                'dbprefix'=>$this->db->dbprefix, //获取数据库表前缀
                'charset'=>$this->db->char_set, //获取数据库编码
                'dbcollat'=>$this->db->dbcollat, //获取数据库通信规则
                'port'=>$this->db->port, //获取数据库连接端口
                'dbdriver'=>$this->db->dbdriver, //获取数据库驱动类型
                'backup'=>$this->db->backup, //获取数据库驱动类型
            );

            /*replace config array string*/
            $test = "array('data'=>APPPATH.'adafa/adaf','dada'=>'fff')";
            // $test = str_replace('/','\/',$test);
            $value = 222;
            $value = is_string($value)? "'{$value}'" : $value;
            $key = 'data';
            preg_match("/{$key}\'=>(.*)\,/",$test, $res); // match 'key=>value,' 
            $test = str_replace("{$res[0]}","data"."'=>{$value},",$test); // replace to 'key=>value,' 


            $this->initialize['sites'] = array_merge($this->config->config['sites'],$this->configs['custom']);
            $this->initialize['smpid'] = 1;
            $this->initialize['user']['role'] = '超级管理员';
            $this->initialize['user']['uname'] = 'Charset';
            $this->initialize['menu'] = array(array('首页','index',site_url('/admin/index')),array('会员管理','user',site_url('/admin/user/index')),array('文章管理','article',site_url('/admin/article/index')),array('图片管理','picture',site_url('/admin/picture/index')),array('文件管理','file',site_url('/admin/file/index')),array('综合管理','integrate',site_url('/admin/integrate/index')),array('系统设置','system',site_url('/admin/system/index')),array('数据库管理','user',site_url('/admin/database/index')));

        }

        public function calendar()
        {
            $prefs = array(
                           'show_next_prev'  => TRUE,
                           'day_type' => 'en',
                           'next_prev_url'   => '/admin/user/index',
                           'template' => '{table_open}<table class="table table-bordered ">{/table_open}

                                                   {heading_row_start}<tr class="label-warning">{/heading_row_start}

                                                   {heading_previous_cell}<th><a href="{previous_url}" class="btn btn-default btn-xs radius-3">&lt;</a></th>{/heading_previous_cell}
                                                   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
                                                   {heading_next_cell}<th><a href="{next_url}" class="btn btn-default btn-xs radius-3">&gt;</a></th>{/heading_next_cell}

                                                   {heading_row_end}</tr>{/heading_row_end}

                                                   {week_row_start}<tr>{/week_row_start}
                                                   {week_day_cell}<td><strong>{week_day}</strong></td>{/week_day_cell}
                                                   {week_row_end}</tr>{/week_row_end}

                                                   {cal_row_start}<tr >{/cal_row_start}
                                                   {cal_cell_start}<td>{/cal_cell_start}

                                                   {cal_cell_content}<a href="{content}" >{day}</a>{/cal_cell_content}
                                                   {cal_cell_content_today}<div class="label label-info"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

                                                   {cal_cell_no_content}{day}{/cal_cell_no_content}
                                                   {cal_cell_no_content_today}<div class="label label-warning">{day}</div>{/cal_cell_no_content_today}

                                                   {cal_cell_blank}&nbsp;{/cal_cell_blank}

                                                   {cal_cell_end}</td>{/cal_cell_end}
                                                   {cal_row_end}</tr>{/cal_row_end}

                                                   {table_close}</table>{/table_close}');

            $this->load->library('calendar', $prefs);
            $data = $this->calendar->generate($this->uri->segment(4), $this->uri->segment(5));
            return $data;
        }

        // public function (){
          
        // }


    }

?>