<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php $this->load->view('public/sidebar'); ?>
            <div id="main" class="main-content col-xs-12 col-sm-12 col-md-9">
                    <div class="container">
                       <div class="content-list col-xs-12 col-sm-12 col-md-12">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                  <label>添加用户</label>
                                  <div class="add pull-right">
                                      <a class="label label-warning"  href="<?php echo site_url('admin/user/index');?>" target="_self">返回</a>
                                  </div>
                              </div>
                              <div class="panel-body">
                                  <div id="content" class="content">
                                      <div class="content-panel col-xs-12 col-sm-12 col-md-12">
                                          <div class="content-form">
                                              <form id="forms" class="forms form-horizontal" action="<?php echo site_url('admin/user/add');?>" method="post" role="form">
                                                  <ul>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">用户名</span>
                                                          <div class="input-control col-sm-10">
                                                              <input id="username" class="form-control" type="text" name="username" value="" placeholder="请输入用户名" pattern="^[a-za-z1-9][a-zA-Z_0-9]{1,49}"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4位以上英文、数字下划线组成的用户名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">用户昵称</span>
                                                          <div class="input-control col-sm-10">
                                                              <input id="username" class="form-control" type="text" name="username" value="" placeholder="请输入用户昵称"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4位以上英文、数字下划线组成的用户名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">登录密码</span>
                                                          <div class="input-control col-sm-10">
                                                              <input id="username" class="form-control" type="password" name="username" value="" placeholder="请输入登录密码"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4位以上英文、数字下划线组成的用户名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">确认密码</span>
                                                          <div class="input-control col-sm-10">
                                                              <input id="username" class="form-control" type="password" name="username" value="" placeholder="请输入确认密码"/>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4位以上英文、数字下划线组成的用户名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">您的生日</span>
                                                          <div class="input-control col-sm-10">
                                                                  <input id="birthday" class="date-control col-xs-4 col-sm-3" type="text" name="birthday" value="<?php echo date('Y-m-d');?>" placeholder="请输入用户名"/>
                                                                  <span class="glyphicon glyphicon-calendar glyphicon-default btn-warning"></span>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">教育程度</span>
                                                          <div class="input-control col-sm-10">
                                                              <div class="input-group select-group">
                                                                  <input id="education" class="form-control" type="hidden" name="education" value="0"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span>保密</span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="0">保密</a></li>
                                                                          <li><a alt="1">本科</a></li>
                                                                          <li><a alt="2">专科</a></li>
                                                                          <li><a alt="3">高中</a></li>
                                                                          <li><a alt="4">初中</a></li>
                                                                          <li><a alt="5">其他</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">您的性别</span>
                                                          <div class="input-control col-sm-10">
                                                              <div class="input-group select-group">
                                                                  <input id="sex" class="form-control" type="hidden" name="sex" value="0"/>
                                                                  <div class="input-group-btn">
                                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span>保密</span> <span class="caret"></span></button>
                                                                      <ul class="dropdown-menu">
                                                                          <li><a alt="0">保密</a></li>
                                                                          <li><a alt="1">男</a></li>
                                                                          <li><a alt="2">女</a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="form-group">
                                                          <span class="col-sm-2 control-label">个人介绍</span>
                                                          <div class="input-control col-sm-10">
                                                              <textarea class="form-control col-xs-12 col-sm-12" name="description" rows="4">这个人很懒，什么也没留下！</textarea>
                                                              <div class="tips col-xs-12 col-sm-12">
                                                                  <div class="alert alert-info alert-sm col-xs-12 col-sm-12">
                                                                      <span><strong>*</strong>请输入4位以上英文、数字下划线组成的用户名</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </li>
                                                      <li class="submit-btn col-xs-12 col-sm-12 col-md-12 inline-block">
                                                          <button type="button" class="btn btn-primary btn-sm col-xs-3 col-sm-3">添加</button>
                                                          <button type="reset" class="btn btn-primary btn-sm col-xs-3 col-sm-3">取消</button>
                                                      </li>
                                                  </ul>
                                              </form>
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

