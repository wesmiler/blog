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
                                      <span class="text-muted">评论管理</span>
                                  </label>
                                  <div class="add pull-right">
                                      <a class="label label-warning"  href="<?php echo site_url('admin/article/index');?>" target="_self">返回</a>
                                  </div>
                              </div>
                              <div class="panel-body">
                                <div id="datalist" class="list-panel">
                                        <div id="search_header" class="select-panel col-xs-12 col-sm-12 col-md-12">
                                            <h4 class="title  pull-left">评论搜索</h4>
                                        </div>
                                        <div class="search-panel col-xs-12 col-sm-12 col-md-12">
                                            <div class="search-form pull-left">
                                                <form id="search" class="forms form-inline" action="" method="post" role="form">
                                                    <ul>
                                                        <!-- <li class="date-search input-append date-control">
                                                            <span class="control-label">发布日期：</span>
                                                            <input id="datetime1" class="form-control form-datetime date-control inline-block" type="text" name="start_date" value="" placeholder="开始日期" pattern="^([1-9][0-9]{3})-([1-9]|0[1-9]|1[0-2])-([1-9]|0[1-9]|[1-2][0-9]|3[0-1])$"/>
                                                            <span class="inline-block">-</span>
                                                            <input id="datetime2" class="form-control form-datetime date-control inline-block" type="text" name="end_date" value="" placeholder="结束日期" pattern="^([1-9][0-9]{3})-([1-9]|0[1-9]|1[0-2])-([1-9]|0[1-9]|[1-2][0-9]|3[0-1])$"/>
                                                        </li> -->
                                                        <li class="integrate-search date">
                                                            <span class="control-label">关键词：</span>
                                                            <input id="keyWord" class="form-control  inline-block" type="text" datatype="s1-50" errormsg="搜索关键词为1-50个字符！" name="keyword" value="" placeholder="请输入关键词" pattern="^[\u4e00-\u9fa5a-zA-Z1-9][\u4e00-\u9fa5_a-zA-Z0-9]{0,49}"/>
                                                            <div class="btn-group dropdown">
                                                                <button type="button" class="btn btn-default btn-item">评论人</button>
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                  <span class="caret"></span>
                                                                  <span class="sr-only">搜索类型</span>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu">
                                                                  <li><a href="#aid" data="aid">文章ID</a></li>
                                                                  <li><a href="#username" data="username">评论人</a></li>
                                                                  <li><a href="#email" data="email">邮箱</a></li>
                                                                </ul>
                                                                <input id="searchType" type="hidden" name="type" value="username"/>
                                                            </div>
                                                            <div class="search-btn inline-block">
                                                                <button type="submit" class="btn btn-primary btn-sm col-xs-12">确定</button>
                                                                <span class="col-xs-12">（默认按评论人搜索）</span>
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
                                                            <th>文章ID</th>
                                                            <th>内容</th>
                                                            <th>评论人</th>
                                                            <th>邮箱</th>
                                                            <th>评论时间</th>
                                                            <th>审核状态</th>
                                                            <th>操作</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($list as $k => $ls): ?>                                
                                                        <tr id="list_<?=($k+1)?>" class="d-list">
                                                            <td><input id="sel_<?=($k+1)?>" class="sel" type="checkbox" name="sel_<?=($k+1)?>" value="<?=($k+1)?>"/></td>
                                                            <td><?=$ls['id']?></td>
                                                            <td><?=$ls['id']?></td>
                                                            <td><?=$ls['id']?></td>
                                                            <td><?=$ls['username']?></td>
                                                            <td><?=$ls['email']?></td>
                                                            <td><?=date('Y-m-d H:i:s',$ls['create_time'])?></td>
                                                            <td>
                                                                <?php if($ls['status'] == 1):?>
                                                                    <span class="text-success">已审核</span>
                                                                <?php else: ?>
                                                                    <input class="input-control" type="checkbox" name="status" value="0">
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($ls['status'] === 0):?>
                                                                <button class="btn btn-success btn-xs save-btn" onClick="return save_data(1,'list_1','<?php echo site_url('admin/article/save/1');?>');">保存</button>
                                                                <?php endif; ?>
                                                                <!-- <button class="btn btn-warning btn-xs edit-btn" onClick="return edit_data(<?=$ls['id']?>,'list_<?=($k+1)?>')" >编辑</button> -->
                                                                <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(<?=$ls['id']?>,'list_<?=($k+1)?>','<?php echo site_url('admin/article/comments?type=del&id='.($k+1));?>')">删除</button>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <tr id="list_1" class="d-list">
                                                            <td><input id="sel_1" class="sel" type="checkbox" name="sel_1" value="1"/></td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td><p><?php echo ellipsize('这是测试文章评论内容！',5,1);?></p></td>
                                                            <td>admin</td>
                                                            <td>测试</td>
                                                            <td><?=date('Y-m-d H:i:s',time())?></td>
                                                            <td>
                                                                <!-- <span class="text-success">已审核</span> -->
                                                                <input class="input-cpntrol" type="checkbox" name="status" value="0">

                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success btn-xs save-btn" onClick="return save_data(1,'list_1','<?php echo site_url('admin/article/comments?type=audit&id=1');?>');">审核</button>
                                                                <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(1,'list_1','<?php echo site_url('admin/article/comments?type=del&id=1');?>')">删除</button>
                                                                <!-- <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(<?=$ls['id']?>,'list_<?=($k+1)?>','<?php echo site_url('admin/article/comments?type=del&id='.($k+1));?>')">删除</button> -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="cust-sort pull-left">
                                                                    <span class="text-info">排序</span>
                                                                    <select id="sort" class="sel-sort" name="sort">
                                                                        <option value="id" selected>ID</option>
                                                                        <option value="aid">文章ID</option>
                                                                        <option value="create_time">评论时间</option>
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