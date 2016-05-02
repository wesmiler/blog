<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <!-- 分类管理 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/plugin/DatetimePicker/css/datetimepicker.css');?>"/>
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php $this->load->view('public/sidebar'); ?>
            <div id="main" class="main-content col-xs-12 col-sm-12 col-md-9">
                    <div class="container">
                        <div class="content-list col-xs-12 col-sm-12 col-md-12">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                  <label class="manage">
                                      <a class="active" href="<?php echo site_url($base['parent_uri']);?>" disabled="disabled" target="_self">文章管理</a>
                                      <span>&nbsp;|&nbsp;</span>
                                      <span class="text-muted"><?=$base['names']?>分类管理</span>
                                  </label>
                                  <div class="add pull-right">
                                      <a class="label label-warning" data-toggle="modal" data-target="#Modal" href="javascript:void(0):">添加</a>
                                  </div>
                              </div>
                              <div class="panel-body">
                                <div id="datalist" class="list-panel">
                                        <div id="search_header" class="select-panel col-xs-12 col-sm-12 col-md-12">
                                            <h4 class="title  pull-left"><?=$base['names']?>分类搜索</h4>
                                        </div>
                                        <div class="search-panel col-xs-12 col-sm-12 col-md-12">
                                            <div class="search-form pull-left">
                                                <form id="search" class="forms form-inline" action="" method="post" role="form">
                                                    <ul>
                                                        <li class="integrate-search">
                                                            <span class="control-label">关键词：</span>
                                                            <input id="keyWord" class="form-control inline-block" type="text" name="keyword" value="" placeholder="请输入关键词" pattern="^[\u4e00-\u9fa5a-zA-Z1-9][\u4e00-\u9fa5_a-zA-Z0-9]{0,49}"/>
                                                            <div class="btn-group dropdown">
                                                                <button type="button" class="btn btn-default btn-item">类型</button>
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                  <span class="caret"></span>
                                                                  <span class="sr-only">搜索类型</span>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu">
                                                                  <li><a href="#id" data="id">ID</a></li>
                                                                  <li><a href="#names" data="names">名称</a></li>
                                                                  <li><a href="#ptype" data="parent_type">父类</a></li>
                                                                </ul>
                                                                <input id="searchType" type="hidden" name="type" value="names"/>
                                                            </div>
                                                            <div class="search-btn inline-block">
                                                                <button type="submit" class="btn btn-primary btn-sm col-xs-12">确定</button>
                                                                <span class="col-xs-12">（默认按分类名称搜索）</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="table-panel col-xs-12 col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <caption>数据列表</caption>
                                                    <thead>
                                                        <tr class="label-info">
                                                            <th><a href="#sel_all" onClick="return sel_all('sel');">全选</a></th>
                                                            <th>ID</th>
                                                            <th>名称</th>
                                                            <th>父类</th>
                                                            <th>创建时间<a class="sort-by-time" href="javascript:void(0);" title="按时间倒序排序" onClick="return sort(0,this,'<?php echo current_url();?>')" data-type="publish_time"><span class="caret"></span></a></th>
                                                            <th><?=$base['names']?>数</th>
                                                            <th>状态</th>
                                                            <th>操作</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($list as $k => $ls): ?>                                
                                                        <tr id="list_<?=($k+1)?>" class="d-list">
                                                            <td><input id="sel_<?=($k+1)?>" class="sel" type="checkbox" name="sel_<?=($k+1)?>" value="<?=($k+1)?>"/></td>
                                                            <td><?=$ls['id']?></td>
                                                            <td><?=$ls['username']?></td>
                                                            <td><?=$ls['nickname']?></td>
                                                            <td><?=date('Y-m-d H:i:s',$ls['create_time'])?></td>
                                                            <td>
                                                                <?php if($ls['status'] == 1):?>
                                                                    <input class="" type="checkbox" name="text" value="1" checked="checked"/>
                                                                <?php else: ?>
                                                                    <input class="" type="checkbox" name="text" value="0" />
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success btn-xs save-btn col-sm-" onClick="return window.location='<?php echo site_url('admin/user/edit?id='.$ls['id']);?>';" >保存</button>
                                                                <button class="btn btn-warning btn-xs edit-btn" onClick="return edit_data(<?=$ls['id']?>,'list_<?=($k+1)?>')" >编辑</button>
                                                                <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(<?=$ls['id']?>,'list_<?=($k+1)?>')">删除</button>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <tr id="list_1" class="d-list">
                                                            <td><input id="sel_1" class="sel" type="checkbox" name="sel_1" value="1"/></td>
                                                            <td>1</td>
                                                            <td>PHP框架</td>
                                                            <td>PHP</td>
                                                            <td><?=date('Y-m-d H:i:s',time())?></td>
                                                            <td>4</td>
                                                            <td>
                                                                    <input class="" type="checkbox" name="text" value="1" checked="checked"/>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo site_url($base['cur_uri'].'?type=subtype&pid=1');?>" target="_self"><button class="btn btn-success btn-xs save-btn" >添加子类</button></a>
                                                                <a href="<?php echo site_url($base['cur_uri'].'?type=edit&id=1');?>" target="_self"><button class="btn btn-warning btn-xs edit-btn">编辑</button></a>
                                                                <!-- <a href="<?php echo site_url($base['cur_uri'].'?type=edit&id='.$ls['id']);?>"><button class="btn btn-warning btn-xs edit-btn">编辑</button></a> -->
                                                                <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(1,'list_1','<?php echo site_url($base['cur_uri'].'?type=del&id=1');?>')">删除</button>
                                                                <!-- <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(1,'list_1','<?php echo site_url($base['cur_uri'].'?type=del&id='.$ls['id']);?>')">删除</button> -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="cust-sort pull-left">
                                                                    <span class="text-info">排序</span>
                                                                    <select id="sort" class="sel-sort" name="sort">
                                                                        <option value="id">ID</option>
                                                                        <option value="publish_time">创建时间</option>
                                                                    </select>
                                                                </div>
                                                                <div class="list-operation pull-left"> 
                                                                    <button class="sort-form-submit btn btn-primary btn-xs" data-toggle="d-list" data="sel-sort" data-type="all" onClick="return sort(1,this,'<?php echo current_url();?>');">确定</button>
                                                                    <button class="sel-invert btn btn-primary btn-xs" data-toggle="d-list" onClick="return sel_invert(this);">反选</button>
                                                                    <button class="del-select btn btn-primary btn-xs" data-toggle="d-list" onClick="return del_sellect(this);">反选</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="page col-xs-offset-1 col-sm-offset-3 col-md-offset-3">
                                                <ul class="pagination inline-block">
                                                    <?=$page?>
                                                </ul>
                                            </div>  
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="ModalLabel">添加<?=$base['names']?>分类</h4>
                                              </div>
                                              <div class="modal-body">
                                                <form id="modalForm" class="forms m-form form-horizontal" action="<?php echo site_url($base['cur_uri'].'?type=ajax_add');?>" method="post" role="form">
                                                    <ul>
                                                        <li class="form-group">
                                                            <span class="col-sm-2 control-label pull-left">分类名称</span>
                                                            <div class="input-control col-xs-6 col-sm-6">
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
                                                                            <?php for ($i =0 ; $i < 14; $i++):?>
                                                                              <li class="hide"><a alt="随笔">随笔<?=$i?></a></li>
                                                                            <?php endfor; ?>
                                                                            <li class="divider"></li>
                                                                            <li class="btn"><button type="button" class="prev btn btn-link inline-block" data="0" data-toggle="5">上一页</button>&nbsp;<button type="button" class="next btn btn-link inline-block" data="5" data-toggle="5">下一页</button></li>
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
                                                                <label class="radio-inline"><input type="radio" checked="checked" name="status"  value="1"/>是</label>
                                                                <label class="radio-inline"><input type="radio" name="status" value="0"/>否</label>
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
                                        </div><!-- /.modal -->
                                </div><!-- /list-panel -->
                              </div><!-- /panel-body -->
                            </div><!-- /panel-success -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('public/footer'); ?>