<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <!-- 文章管理 -->
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
                                      <span class="text-muted">文章管理</span>
                                      <span>&nbsp;|&nbsp;</span>
                                      <a href="<?php echo site_url('admin/article/comments');?>" target="_self">评论管理</a>
                                      <span>&nbsp;|&nbsp;</span>
                                      <a href="<?php echo site_url('admin/article/classify');?>" target="_self">文章分类管理</a>
                                  </label>
                                  <div class="add pull-right">
                                      <a class="label label-warning"  href="<?php echo site_url('admin/article/add');?>" target="_self">添加</a>
                                  </div>
                              </div>
                              <div class="panel-body">
                                <div id="datalist" class="list-panel">
                                        <div id="search_header" class="select-panel col-xs-12 col-sm-12 col-md-12">
                                            <h4 class="title  pull-left">文章搜索</h4>
                                        </div>
                                        <div class="search-panel col-xs-12 col-sm-12 col-md-12">
                                            <div class="search-form pull-left">
                                                <form id="search" class="forms form-inline" action="" method="post" role="form">
                                                    <ul>
                                                        <li class="date-search input-append date-control">
                                                            <span class="control-label">发布日期：</span>
                                                            <input id="datetime1" class="form-control form-datetime date-control inline-block" type="text" name="start_date" value="" placeholder="开始日期" pattern="^([1-9][0-9]{3})-([1-9]|0[1-9]|1[0-2])-([1-9]|0[1-9]|[1-2][0-9]|3[0-1])$"/>
                                                            <span class="inline-block">-</span>
                                                            <input id="datetime2" class="form-control form-datetime date-control inline-block" type="text" name="end_date" value="" placeholder="结束日期" pattern="^([1-9][0-9]{3})-([1-9]|0[1-9]|1[0-2])-([1-9]|0[1-9]|[1-2][0-9]|3[0-1])$"/>
                                                        </li>
                                                        <li class="integrate-search date">
                                                            <span class="control-label">关键词：</span>
                                                            <input id="keyWord" class="form-control  inline-block" type="text" datatype="s1-50" errormsg="搜索关键词为1-50个字符！" name="keyword" value="" placeholder="请输入关键词" pattern="^[\u4e00-\u9fa5a-zA-Z1-9][\u4e00-\u9fa5_a-zA-Z0-9]{0,49}"/>
                                                            <div class="btn-group dropdown">
                                                                <button type="button" class="btn btn-default btn-item">类型</button>
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                  <span class="caret"></span>
                                                                  <span class="sr-only">搜索类型</span>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu">
                                                                  <li><a href="#id" data="id">ID</a></li>
                                                                  <li><a href="#author" data="author">作者</a></li>
                                                                  <li><a href="#title" data="title">标题</a></li>
                                                                  <li><a href="#type" data="type">分类</a></li>
                                                                  <li><a href="#publish_time" data="publish_time">发布日期</a></li>
                                                                </ul>
                                                                <input id="searchType" type="hidden" name="type" value="publish_time"/>
                                                            </div>
                                                            <div class="search-btn inline-block">
                                                                <button type="submit" class="btn btn-primary btn-sm col-xs-12">确定</button>
                                                                <span class="col-xs-12">（默认按注册日期搜索）</span>
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
                                                            <th>标题</th>
                                                            <th>作者</th>
                                                            <th>分类</th>
                                                            <th>发布时间<a class="sort-by-time" href="javascript:void(0);" title="按时间倒序排序" onClick="return sort(0,this,'<?php echo current_url();?>')" data-type="publish_time"><span class="caret"></span></a></th>
                                                            <th>阅读</th>
                                                            <th>评论</th>
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
                                                                <button class="btn btn-success btn-xs save-btn" onClick="return save_data(1,'list_1','<?php echo site_url('admin/article/save/1');?>');">保存</button>
                                                                <!-- <button class="btn btn-warning btn-xs edit-btn" onClick="return edit_data(<?=$ls['id']?>,'list_<?=($k+1)?>')" >编辑</button> -->
                                                                <a href="<?php echo site_url('admin/article/edit/1');?>" target="_self"><button class="btn btn-warning btn-xs edit-btn">编辑</button></a>
                                                                <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(<?=$ls['id']?>,'list_<?=($k+1)?>')">删除</button>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <tr id="list_1" class="d-list">
                                                            <td><input id="sel_1" class="sel" type="checkbox" name="sel_1" value="1"/></td>
                                                            <td>1</td>
                                                            <td>测试</td>
                                                            <td>测试</td>
                                                            <td>测试</td>
                                                            <td><?=date('Y-m-d H:i:s',time())?></td>
                                                            <td>56</td>
                                                            <td>5</td>
                                                            <td>
                                                                    <input class="" type="checkbox" name="text" value="1" checked="checked"/>
                                                            </td>
                                                            <td>
                                                                <!-- <button class="btn btn-success btn-xs save-btn" onClick="return save_data(1,'list_1')" >保存</button> -->
                                                                <button class="btn btn-success btn-xs save-btn" onClick="return save_data(1,'list_1','<?php echo site_url('admin/article/save/1');?>');">保存</button>
                                                                <!-- <button class="btn btn-warning btn-xs edit-btn" onClick="return edit_data(1,'list_1')" >编辑</button> -->
                                                                <a href="<?php echo site_url('admin/article/edit/1');?>" target="_self"><button class="btn btn-warning btn-xs edit-btn">编辑</button></a>
                                                                <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(1,'list_1','<?php echo site_url('admin/article/del/1');?>')">删除</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="cust-sort pull-left">
                                                                    <span class="text-info">排序</span>
                                                                    <select id="sort" class="sel-sort" name="sort">
                                                                        <option value="id">ID</option>
                                                                        <option value="publish_time">发布时间</option>
                                                                        <option value="hits">阅读量</option>
                                                                        <option value="comments">评论数</option>
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