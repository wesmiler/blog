<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
    * 自定义Loader扩展类
    * MY_Loader class description
    * @author Chen
    */
    class MY_Loader extends CI_Loader{
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * 设置视图并开启主题
         * switch_themes description
         * @param  boolean $open 默认开启主题
         * @return 
         */
        public function switch_themes($open=TRUE) //默认开启主题
        {
            if($open)
            {
                 $theme_dir = str_replace('/',DS,FCPATH.THEME_DIR.DEFAULT_THEME);
                 $this->_ci_view_paths = array($theme_dir=>TRUE);
            }
        }

    }

?>