<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
*/
$config['base_url'] = 'http://www.blog.com';
$config['sites']=array(
    'domain'=>'www.blog.com',
    'uploadpath' => APPPATH.'uploads/',
    'description'=>'Charset 的个人博客',
    'presentation'=>'我的个人博客',
    'keywords'=>'博客,个人博客,天乐的博客',
    'theme'=>'default/',
    'close'=>0,
    'closemsg'=>'网站正在维护...',
    'record'=>'桂粤 AE780937E-1', // record code
    'count_code'=>'ddd', // baidu count code

);

$config['custom']=array(
    'sitename'=>'Wesmiler',
    'weixin'=>'chen',
    'email'=>'wesmiler@163.com', // administrator's email
    'qq'=>'123456789', // administrator's qq
    'register'=>1,
    'commemt'=>1,
    'verify'=>1, //开启
    'editor'=>'kindeditor', //or summernote
);


?>