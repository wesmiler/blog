<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <!-- 系统设置 -->
    <?php if ($sites['editor']==='summernote'): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/plugin/Summernote/dist/summernote.css');?>">
    <?php elseif ($sites['editor']==='kindeditor'):?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/plugin/kindeditor/themes/default/default.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/plugin/kindeditor/plugins/code/prettify.css');?>" />
    <?php endif; ?>
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php $this->load->view('public/sidebar'); ?>
            <div id="main" class="main-content col-xs-12 col-sm-12 col-md-9">
                    <div class="container">
                       <div class="content-list col-xs-12 col-sm-12 col-md-12">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                  <label class="manage">
                                      <a href="<?php echo site_url('admin/system/index');?>" target="_self">网站设置</a>
                                      <span>&nbsp;|&nbsp;</span>
                                      <span class="text-muted">用户设置</span>
                                      <span>&nbsp;|&nbsp;</span>
                                      <a href="<?php echo site_url('admin/system/database');?>" target="_self">数据库设置</a>
                                  </label>
                              </div>
                              <div class="panel-body">
                                  <div id="content" class="content">
                                      <div class="content-panel col-xs-12 col-sm-12 col-md-12">
                                          <div class="content-form">
                                              <form id="forms" class="forms form-horizontal" action="<?php echo site_url('admin/article/add');?>" method="post" role="form">
                                                  <ul>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">网站名称</span>
                                                          <div class="input-control col-xs-4 col-sm-4">
                                                              <input id="username" class="form-control" type="text" name="sitename" value="<?=$sites['sitename']?>" placeholder="请输入网站名称"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4-20位中英文组成的网站名称</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">站长邮箱</span>
                                                          <div class="input-control col-xs-4 col-sm-4">
                                                              <input id="username" class="form-control" type="text" name="email" value="<?=$sites['email']?>" placeholder="请输入站长邮箱"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入正确格式的站长邮箱</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">站长QQ</span>
                                                          <div class="input-control col-xs-6 col-sm-6 pull-left">
                                                              <input id="username" class="form-control" type="text" name="qq" value="<?=$sites['qq']?>" placeholder="请输入站长联系QQ"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入正确格式的站长联系QQ</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">站长微信</span>
                                                          <div class="input-control col-xs-6 col-sm-6 pull-left">
                                                              <input id="username" class="form-control" type="text" name="weixin" value="<?=$sites['weixin']?>" placeholder="请输入站长微信号"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入正确格式的站长微信号</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">编辑器类型</span>
                                                          <div class="input-control col-sm-10">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="sex" value="kindeditor"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span>kindeditor</span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="kindeditor">kindeditor</a></li>
                                                                          <li><a alt="summernote">summernote</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">开启注册</span>
                                                          <div class="input-control col-sm-10">
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio1" name="register" checked="checked" value="1"> 是
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio2" name="register" value="0"> 否
                                                                  </label>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">开启评论</span>
                                                          <div class="input-control col-sm-10">
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio1" name="comment" checked="checked" value="1"> 是
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio2" name="comment" value="0"> 否
                                                                  </label>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">评论验证</span>
                                                          <div class="input-control col-sm-10">
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio1" name="verify" checked="checked" value="1"> 是
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio2" name="verify" value="0"> 否
                                                                  </label>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">评论时间</span>
                                                          <div class="input-control col-sm-10">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="sex" value="30"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span>30秒</span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="60">1分钟</a></li>
                                                                          <li><a alt="180">3分钟</a></li>
                                                                          <li><a alt="300">5分钟</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="submit-btn col-xs-12 col-sm-12 col-md-12 inline-block">
                                                          <button type="button" class="btn btn-primary btn-sm submit col-xs-2 col-sm-2">保存</button>
                                                          <button type="reset" class="btn btn-primary btn-sm col-xs-2 col-sm-2">取消</button>
                                                      </li>
                                                  </ul>
                                              </form>
                                          </div>
                                      </div>
                                  </div><!-- /.list-panel -->
                              </div><!-- /.panel-body -->
                            </div><!-- /.panel-success -->
                        </div> 
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('public/footer'); ?>
<?php if ($sites["editor"] === 'summernote'): ?>
    <script src="<?php echo base_url('sources/plugin/Summernote/dist/summernote.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('sources/js/admin/summernote-editor.min.js');?>" type="text/javascript"></script>
<?php elseif ($sites["editor"] === 'kindeditor'): ?>
    <script src="<?php echo base_url('sources/plugin/kindeditor/kindeditor.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('sources/plugin/kindeditor/lang/zh_CN.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('sources/plugin/kindeditor/plugins/code/prettify.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('sources/js/admin/kindeditor-editor.min.js');?>" type="text/javascript"></script>
<?php endif; ?>