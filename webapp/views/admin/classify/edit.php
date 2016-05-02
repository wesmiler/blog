<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <!-- 编辑分类 -->
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php $this->load->view('public/sidebar'); ?>
            <div id="main" class="main-content col-xs-12 col-sm-12 col-md-9">
                    <div class="container">
                       <div class="content-list col-xs-12 col-sm-12 col-md-12">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                  <label>编辑分类</label>
                                  <div class="add pull-right">
                                      <a class="label label-warning"  href="<?php echo site_url($base['cur_uri']);?>" target="_self">返回</a>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <div id="content" class="content">
                                      <div class="content-panel col-xs-12 col-sm-12 col-md-12">
                                          <div class="content-form">
                                              <form id="forms" class="forms form-horizontal" action="<?php echo site_url($base['parent_uri'].'?type=edit&id=1');?>" method="post" role="form">
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
                                                                      <ul class="dropdown-menu scroll-dropdown">
                                                                            <li><a alt="0">无</a></li>
                                                                            <li><a alt="PHP">PHP</a></li>
                                                                            <li><a alt="HTML">HTML</a></li>
                                                                            <li><a alt="Bootstrap">Bootstrap</a></li>
                                                                            <li><a alt="Javascript">Javascript</a></li>
                                                                            <li><a alt="随笔">随笔</a></li>
                                                                            <?php for ($i =0 ; $i < 16; $i++):?>
                                                                              <li class="hide"><a alt="随笔">随笔<?=$i?></a></li>
                                                                            <?php endfor; ?>
                                                                            <li class="divider"></li>
                                                                            <li class="btn"><button type="button" class="prev btn btn-link inline-block" data="0" data-toggle="6">上一页</button>&nbsp;<button type="button" class="next btn btn-link inline-block" data="6" data-toggle="6">下一页</button></li>
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
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label pull-left">是否可用</span>
                                                          <div class="input-control col-sm-6 pull-left">
                                                              <label class="radio-inline"><input type="radio" checked="checked" name="status" value="1"/>是</label>
                                                              <label class="radio-inline"><input type="radio" name="status" value="0"/>否</label>
                                                          </div>
                                                      </li>
                                                      <li class="submit-btn col-xs-12 col-sm-12 col-md-12 inline-block">
                                                        <button type="button" class="btn btn-primary btn-sm col-xs-2 col-sm-2">添加</button>
                                                        <button type="reset" class="btn btn-primary btn-sm col-xs-2 col-sm-2">取消</button>
                                                      </li>
                                                  </ul>
                                              </form>
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