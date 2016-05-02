<?php  
/*
|-----------------------------------------------------
|PAGINATION CONFIG
|-----------------------------------------------------
| 1.this config is set the pagination classes default parma 
|
 */
$config['base_url'] = '';    //the url as access you class and page class or function
$config['per_page'] = 10;
$config['uri_segment'] = 4;
$config['num_links'] = 3;
$config['data_page_attr'] = 'data-page';    //page number segment attr
$config['use_page_numbers'] = FALSE;     //use page number as url segment value
$config['enable_query_strings'] = FALSE;    //use query string as URI routes
$config['query_string_segment'] = 'page';   //page string segment

$config['first_link'] = '首页';    //first page link name
$config['first_tag_open'] = '<li>';    //first page tag open
$config['first_tag_close'] = '</li>';      //first page tag close

$config['last_link'] = '尾页';    //last page link name
$config['last_tag_open'] = '<li>';     //last page tag open
$config['last_tag_close'] = '</li>';   //last page tag close

$config['prev_link'] = '上一页';      //prev page link name
// $config['prev_link'] = '&laquo;';      //prev page link name
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';

$config['next_link'] = '下一页';      //next page link name
// $config['next_link'] = '&raquo;';      //next page link name
$config['next_tag_open'] = '<li class="next">';
$config['next_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="active"><a>';        //current page tag open
$config['cur_tag_close'] = '</a></li>';      //current page tag close

$config['num_tag_open'] = '<li>'; //number link tag open
$config['num_tag_close'] = '</li>';

// $config['display_pages'] = FALSE; //not display the number link of prev page or next page

?>