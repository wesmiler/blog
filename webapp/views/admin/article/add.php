<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <!-- 添加文章 -->
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
                                  <label>添加文章</label>
                                  <div class="add pull-right">
                                      <a class="label label-warning"  href="<?php echo site_url('admin/article/index');?>" target="_self">返回</a>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <div id="content" class="content">
                                      <div class="content-panel col-xs-12 col-sm-12 col-md-12">
                                          <div class="content-form">
                                              <form id="forms" class="forms form-horizontal" action="<?php echo site_url('admin/article/add');?>" method="post" role="form">
                                                  <ul>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">作者</span>
                                                          <div class="input-control col-xs-6 col-sm-6 pull-left">
                                                              <input id="username" class="form-control" type="text" name="username" value="" placeholder="请输入作者"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4-25位中英文、数字、下划线组成的作者名称</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">标题</span>
                                                          <div class="input-control col-xs-6 col-sm-7 pull-left">
                                                              <input id="username" class="form-control col-sm-10" type="content" name="username" value="" placeholder="请输入文章标题"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4位以上中英文、数字、（非下划线、-、空格开头）组成的标题</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="input-group-btn btn-group dropdown">
                                                              <button type="button" class="btn btn-default btn-item">类型</button>
                                                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                <span class="caret"></span>
                                                                <span class="sr-only">文章类型</span>
                                                              </button>
                                                              <ul class="dropdown-menu" role="menu">
                                                                <li>
                                                                    <a href="javascript:void(0);" data="id">ID</a>
                                                                    <ul class="sub-menu dropdown-menu" role="menu">
                                                                        <li><a href="javascript:void(0);" data="ad">测试</a></li>
                                                                        <li><a href="javascript:void(0);" data="id">ID</a></li>
                                                                        <li><a href="javascript:void(0);" data="id">ID</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="javascript:void(0);" data="author">作者</a>
                                                                    <ul class="sub-right-menu dropdown-menu" role="menu">
                                                                        <li><a href="javascript:void(0);" data="ad">测试1</a></li>
                                                                        <li><a href="javascript:void(0);" data="id">ID</a></li>
                                                                        <li><a href="javascript:void(0);" data="id">ID</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="javascript:void(0);" data="title">标题</a></li>
                                                                <li><a href="javascript:void(0);" data="type">分类</a></li>
                                                                <li><a href="javascript:void(0);" data="publish_time">发布日期</a></li>
                                                                <li class="divider"></li>
                                                                <li class="add"><a data-toggle="modal" data-target="#Modal" href="javascript:void(0);" data="publish_time">添加分类</a></li>
                                                              </ul>
                                                              <input id="type" name="type" value="publish_time" type="hidden">
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">内容</span>
                                                          <div class="input-control col-xs-9 col-sm-9 pull-left">
                                                              <textarea id="Editor" rows="24" cols="10" class="text-editor form-control" name="content" value="" placeholder="请输入文章内容"></textarea>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">标签</span>
                                                          <div class="input-control col-xs-10 col-sm-10">
                                                              <div  class="label-list pull-left">
                                                                  <h4>
                                                                      <span class="label label-danger"><span>PHP开发</span><a class="label-del">&times;</a></span>
                                                                      <span class="label label-danger"><span>PHP开发</span><a class="label-del">&times;</a></span>
                                                                      <span class="label label-danger"><span>PHP开发</span><a class="label-del">&times;</a></span>
                                                                      <span class="label label-danger"><span>PHP开发</span><a class="label-del">&times;</a></span>
                                                                  </h4>
                                                              </div>
                                                              <input id="labelText" class="label-text input-sm col-xs-4 col-sm-2" type="text" value="" data-container="body" data-toggle="tips" data-content="标签格式为2-6位中文，空格提交，最多5个！" data-html="true" placeholder="请输入标签"/>
                                                              <input id="labels" class="form-control" type="hidden" name="label" value=""/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入2-6位中文组成的标题</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">发布日期</span>
                                                          <div class="input-control input-append date-control col-sm-10">
                                                              <input id="datetime" class="form-datetime col-xs-4 col-sm-3" type="text" name="birthday" value="" placeholder="<?php echo date('Y-m-d');?>"/>
                                                              <span class="add-on btn"><span class="glyphicon glyphicon-th"></span></span>
                                                              <span class="span-tips">（仅未发布文章有效）</span>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">访问量</span>
                                                          <div class="input-control col-xs-8 col-sm-10 pull-left">
                                                              <input class="col-xs-4 col-sm-1" type="text" name="hits" value="0" placeholder="请输入访问量"/>
                                                              <span class="span-tips">（个浏览）</span>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">热门文章</span>
                                                          <div class="input-control col-sm-6 pull-left">
                                                              <label class="radio-inline"><input type="radio" name="hot" value="1"/>是</label>
                                                              <label class="radio-inline"><input type="radio" checked="checked" name="hot" value="0"/>否</label>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">立即发布</span>
                                                          <div class="input-control col-sm-10">
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio1" name="status" checked="checked" value="1"> 是
                                                                  </label>
                                                                  <label class="radio-inline">
                                                                    <input type="radio" id="inlineRadio2" name="status" value="0"> 否
                                                                  </label>
                                                          </div>
                                                      </li>
                                                      <li class="submit-btn col-xs-12 col-sm-12 col-md-12 inline-block">
                                                          <a href="<?php echo site_url('article/preview');?>" target="_blank"><button type="button" class="btn btn-warning btn-sm btn-preview col-xs-2 col-sm-2">预览</button></a>
                                                          <button type="button" class="btn btn-primary btn-sm col-xs-2 col-sm-2">添加</button>
                                                          <button type="reset" class="btn btn-primary btn-sm col-xs-2 col-sm-2">取消</button>
                                                      </li>
                                                  </ul>
                                              </form>
                                              <!-- Modal -->
                                              <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                      <h4 class="modal-title" id="ModalLabel">添加文章分类</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                      <form id="modalForm" class="forms m-form form-horizontal" action="<?php echo site_url('admin/article/classify');?>" method="post" role="form">
                                                          <ul>
                                                              <li class="form-group">
                                                                  <span class="col-sm-2 control-label pull-left">分类名称</span>
                                                                  <div class="input-control col-xs-6 col-sm-6 pull-left">
                                                                      <input id="t_ames" class="form-control" type="text" name="names" value="" placeholder="请输入分类名称"/>
                                                                      <div class="tips col-xs-12 col-sm-12">
                                                                          <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                              <span><strong>*</strong>请输入2-10位中英文组成的分类名称</span>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </li>
                                                              <li class="form-group">
                                                                  <span class="col-sm-2 control-label pull-left">选择父类</span>
                                                                  <div class="input-control col-sm-10 pull-left">
                                                                      <div class="input-group select-group">
                                                                          <input class="form-control" type="hidden" name="parent_type" value="0"/>
                                                                          <div class="input-group-btn">
                                                                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span>无</span> <span class="caret"></span></button>
                                                                              <ul class="dropdown-menu">
                                                                                  <li><a alt="0">无</a></li>
                                                                                  <li><a alt="PHP">PHP</a></li>
                                                                                  <li><a alt="HTML">HTML</a></li>
                                                                                  <li><a alt="Bootstrap">Bootstrap</a></li>
                                                                                  <li><a alt="Javascript">Javascript</a></li>
                                                                                  <li><a alt="随笔">随笔</a></li>
                                                                              </ul>
                                                                          </div>
                                                                          <span class="span-tips">（*默认作为一级分类）</span>
                                                                      </div>
                                                                  </div>
                                                              </li>
                                                              <li class="form-group">
                                                                  <span class="col-sm-2 control-label pull-left">热门分类</span>
                                                                  <div class="input-control col-sm-6 pull-left">
                                                                      <label class="radio-inline"><input type="radio" name="hot" value="1"/>是</label>
                                                                      <label class="radio-inline"><input type="radio" checked="checked" name="hot" value="0"/>否</label>
                                                                  </div>
                                                              </li>
                                                          </ul>
                                                      </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                                      <button type="button" class="btn btn-primary">保存</button>
                                                    </div>
                                                  </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                              </div>
                                              <!-- /.modal -->
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