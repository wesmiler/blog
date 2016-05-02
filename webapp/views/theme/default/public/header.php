<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php echo $title;?></title>
<link rel="icon" href="<?php echo base_url('favicon.ico');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/bootstrap4/dist/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/glyphicon.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/base.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/index.min.css');?>">
<body>
<div id="header" class="header" role="nav">
    <nav class="navbar navbar-inverse navbar-fixed-top col-md-12">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">导航菜单</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=site_url('user/index');?>" title="进入我的博客管理主页">博客主页</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav nav-list">
            <li class="active"><a href="<?php echo base_url('index.php');?>">主页</a></li>
            <li><a href="#article">随笔文章</a></li>
            <li><a href="#note">学习笔记</a></li>
            <li><a href="#sharing">资料分享</a></li>
            <li><a href="#article">在线手册</a></li>
            <!-- <li><a class="visible-xs visible-sm" href="#booking" title="点击订阅博客最新文章">订阅</a></li> -->
          </ul>
          <div class="top-search-form top-search pull-right">
              <form class="navbar-search form-inline pull-left hidden-sm" action="<?php echo site_url('search');?>" method="post">
                     <div class="input-group search-group">
                       <span class="search-label hide">搜一下</span>
                       <div class="input-group-btn">
                         <button type="button" class="btn btn-small btn-default btn-radius-left dropdown-toggle" data-toggle="dropdown">类型 <span class="caret"></span></button>
                         <ul class="dropdown-menu">
                           <li><a href="javascript:void(0);" data-toggle="article">文章</a></li>
                           <li><a href="javascript:void(0);" data-toggle="note">笔记</a></li>
                           <li><a href="javascript:void(0);" data-toggle="sharing">资料</a></li>
                           <li><a href="javascript:void(0);" data-toggle="manual">手册</a></li>
                           <input id="top_search_type" type="hidden" name="type" value="article"/>
                         </ul>
                       </div><!-- /input-group-btn -->
                       <input id="search" class="form-small-control" type="text" name="keyword" value="" placeholder="请输入关键词"/>
                       <a class="btn-icon" title="点击搜索"><button type="submit"><i class="glyphicon-white glyphicon-search text-white"></i></button></a>
                     </div><!-- /input-group -->
              </form>
              <div class="booking pull-left hidden-xs hidden-sm">
                     <ul class="nav navbar-nav"><li><a href="#booking" title="点击订阅博客最新文章">订阅</a></li></ul>
              </div>
          </div>
        </div><!-- /navbar-collapse -->
      </div>
    </nav>
</div>
