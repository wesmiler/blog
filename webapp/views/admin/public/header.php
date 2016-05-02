<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>我的博客系统后台管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/bootstrap4/dist/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/plugin/DatetimePicker/css/datetimepicker.css');?>"/>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/plugin/Validform/css/style.css');?>"/> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/base.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/glyphicon.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/admin/index.min.css');?>">
<body>
<div id="header" class="hrader">
        <div class="container">
                <nav class="navbar navbar-default navbar-invers">
                            <h3 class="navbar pull-left">
                                <span class="">Charset 博客后台</span>
                            </h3>
                            <div id="'navbar" class="collapse navbar-collapse pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a class="top-list-show role" href="javascript:void(0);"><?php echo $user['role'];?>：<span ><?php echo $user['uname'];?></span></a></li>
                                    <li><a class="top-list-show home" href="<?php echo site_url();?>" target="_blank">博客主页</a></li>
                                    <li><a class="top-list-hide refresh" href="#" target="_self">更新缓存</a></li>
                                    <li><a class="top-list-hide layout" href="#" target="_self">退出</a></li>
                                </ul>
                            </div>
                </nav>
        </div>
</div>
