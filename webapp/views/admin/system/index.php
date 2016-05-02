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
                                      <span class="text-muted">网站设置</span>
                                      <span>&nbsp;|&nbsp;</span>
                                      <a href="<?php echo site_url('admin/system/custom');?>" target="_self">用户设置</a>
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
                                                          <span class="col-sm-2 control-label pull-left">关闭网站</span>
                                                          <div class="input-control col-sm-10">
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio2" <?php if ($sites['close']==0):?>checked="checked"<?php endif;?> name="close" value="0"> 否
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio1" <?php if ($sites['close']==1):?>checked="checked"<?php endif;?> name="close" value="1"> 是
                                                                  </label>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">提示信息</span>
                                                          <div class="input-control col-xs-4 col-sm-4 pull-left">
                                                              <textarea id="closeMsg" rows="1" cols="8" class=" form-control" name="closemsg" value="" placeholder="请输入网站关闭提示内容"><?=$sites['closemsg']?></textarea>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">网站域名</span>
                                                          <div class="input-control col-xs-6 col-sm-6 pull-left">
                                                              <input id="username" class="form-control" type="text" name="domain" value="<?=$sites['domain']?>" placeholder="请输入网站域名"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入正确格式的网站域名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">网站描述</span>
                                                          <div class="input-control col-xs-10 col-sm-10 pull-left">
                                                              <input id="username" class="form-control" type="text" name="description" value="<?=$sites['description']?>" maxlength="100" placeholder="请输入网站描述"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入100字符内中英文数字等组成的网站描述</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">网站简介</span>
                                                          <div class="input-control col-xs-10 col-sm-10 pull-left">
                                                              <textarea id="Editor" rows="12" cols="10" class="text-editor form-control" name="presentation" value="" placeholder="请输入网站简介"><?=$sites['presentation']?></textarea>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">关键词</span>
                                                          <div class="input-control label-control col-xs-10 col-sm-10">
                                                              <div  class="label-list pull-left" data-toggle="0">
                                                                  <h4>
                                                                      <?php foreach(explode(',', $sites['keywords']) as $kw): ?>
                                                                      <span class="label label-danger"><span><?=$kw?></span><a class="label-del">&times;</a></span>
                                                                      <?php endforeach; ?>
                                                                  </h4>
                                                              </div>
                                                              <input id="labelText" class="label-text input-sm col-xs-4 col-sm-2" type="text" value="" data-container="body" data-toggle="tips" data-content="关键词格式为2-10位中文英文，回车提交，最多5个！" data-html="true" placeholder="请输入关键词"/>
                                                              <input id="labels" class="form-control labels" type="hidden" name="keywords" value="<?$sites['keywords']?>"/>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">主题模板</span>
                                                          <div class="input-control col-sm-10">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="theme" value="default"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span>default</span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="default">default</a></li>
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