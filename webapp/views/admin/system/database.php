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
                                      <a href="<?php echo site_url('admin/system/custom');?>" target="_self">用户设置</a>
                                      <span>&nbsp;|&nbsp;</span>
                                      <span class="text-muted">数据库设置</span>
                                  </label>
                              </div>
                              <div class="panel-body">
                                  <div id="content" class="content">
                                      <div class="content-panel col-xs-12 col-sm-12 col-md-12">
                                          <div class="content-form">
                                              <form id="forms" class="forms form-horizontal" action="<?php echo site_url('admin/article/add');?>" method="post" role="form">
                                                  <ul>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">主机名</span>
                                                          <div class="input-control col-xs-4 col-sm-4">
                                                              <input class="form-control col-md-6" type="text" name="hostname" value="<?=$db['hostname']?>" placeholder="请输入主机名"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4-12位小写英文、IP、域名形式的主机名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <span class="span-tips"><h4><p class="text-danger">*</p></h4></span>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">数据库类型</span>
                                                          <div class="input-control col-sm-10 pull-left">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="dbdriver" value="<?=$db['dbdriver']?>"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><?=$db['dbdriver']?></span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="mysqli">mysqli</a></li>
                                                                          <li><a alt="mysql">mysql</a></li>
                                                                          <li><a alt="postgres">postgres</a></li>
                                                                          <li><a alt="odbc">odbc</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">DSN</span>
                                                          <div class="input-control col-xs-4 col-sm-4">
                                                              <input class="form-control" type="text" name="dsn" value="<?=$db['dsn']?>" placeholder="可选"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入正确格式的dsn</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">端口号</span>
                                                          <div class="input-control col-xs-4 col-sm-4">
                                                              <input class="form-control" type="text" name="port" value="<?=$db['port']?>" placeholder="端口号"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4-6位数字的端口号</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">数据库名</span>
                                                          <div class="input-control col-xs-4 col-sm-4 pull-left">
                                                              <input class="form-control" type="text" name="database" value="<?=$db['database']?>" placeholder="请输入数据库名"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4-15位小写英文域名形式的数据库名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <span class="span-tips"><h4><p class="text-danger">*</p></h4></span>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">用户名</span>
                                                          <div class="input-control col-xs-4 col-sm-4 pull-left">
                                                              <input class="form-control" type="text" name="username" value="<?=$db['username']?>" placeholder="请输入用户名"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入3-20位小写英文、数字组成的用户名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <span class="span-tips"><h4><p class="text-danger">*</p></h4></span>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">登录密码</span>
                                                          <div class="input-control col-xs-4 col-sm-4 pull-left">
                                                              <input class="form-control" type="password" name="password" value="<?=$db['password']?>" placeholder="请输入登录密码"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入3-20位小写英文、数字组成的登录密码</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <span class="span-tips"><h4><p class="text-danger">*</p></h4></span>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">表前缀</span>
                                                          <div class="input-control col-xs-4 col-sm-4 pull-left">
                                                              <input class="form-control" type="text" name="dbprefix" value="<?=$db['dbprefix']?>" placeholder="请输入表前缀"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入2-6位小写英文+下划线组成的表前缀</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <span class="span-tips"><h4><p class="text-danger">*</p></h4></span>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">数据通信编码</span>
                                                          <div class="input-control col-sm-10 pull-left">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="charset" value="<?=$db['charset']?>"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><?=$db['charset']?></span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="gbk">gbk</a></li>
                                                                          <li><a alt="gb2312">gb2312</a></li>
                                                                          <li><a alt="utf8">utf8</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">数据通信规则</span>
                                                          <div class="input-control col-sm-10 pull-left">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="dbcollat" value="<?=$db['dbcollat']?>"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><?=$db['dbcollat']?></span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="utf8_general_ci">utf8_general_ci</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">备份路径</span>
                                                          <div class="input-control col-xs-6 col-sm-6">
                                                              <input class="form-control" type="text" name="backup" value="<?=$db['backup']?>" placeholder="请输入备份路径"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入正确形式的数据库备份路径</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <span class="span-tips">*（默认以APPPATH为根目录）</span>
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