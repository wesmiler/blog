<?php $this->load->view('public/header'); ?>
<div id="wrapper" class="blog-wrapper">
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php $this->load->view('public/sidebar'); ?>
            <div id="main" class="main-content col-xs-12 col-sm-12 col-md-9">
                    <div class="container">
                        <div class="content-list col-xs-12 col-sm-12 col-md-5 pull-left">
                            <div class="panel panel-success">
                              <div class="panel-heading"><label>登录信息</label></div>
                              <div class="panel-body">
                                <ul class="list-group">
                                  <li class="list-group-item"><span>管理员账号：</span>admin</li>
                                  <li class="list-group-item"><span>最后登录时间：</span>2015-12-12</li>
                                  <li class="list-group-item"><span>最后登录IP地址：</span>192.168.1.1</li>
                                </ul>
                              </div>
                            </div><!-- /panel-success -->
                        </div>
                        <div class="content-list col-xs-12 col-sm-12 col-md-7 pull-left">
                            <div class="panel panel-danger">
                              <div class="panel-heading"><label>操作记录</label></div>
                              <div class="table-responsive">
                                <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>序号</th>
                                            <th>操作</th>
                                            <th>结果</th>
                                            <th>时间</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>2015-12-12 12:12:23</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>2015-12-12 12:12:23</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>ash</td>
                                            <td>Thornton</td>
                                            <td>2015-12-12 12:12:23</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>Larry the Bird</td>
                                            <td>Larry the Bird</td>
                                            <td>2015-12-12 12:12:23</td>
                                          </tr>
                                        </tbody>
                                      </table>
                              </div>
                            </div><!-- /panel-success -->
                        </div>
                        <div class="content-list col-xs-12 col-sm-12 col-md-12 pull-left">
                            <div class="panel panel-info count-panel">
                              <div class="panel-heading"><label>数据统计</label></div>
                              <div class="panel-body">
                                  <ul class="list-inline panel-label col-xs-12 col-sm-12 col-md-12">
                                      <li><span class="label label-primary"><a href="#" target="_self" title="查看文章">1244</a></span><label>文章</label></li>
                                      <li><span class="label label-success"><a href="#" target="_self" title="查看图片">3</a></span><label>图片</label></li>
                                      <li><span class="label label-info"><a href="#" target="_self" title="查看文件">4</a></span><label>文件</label></li>
                                      <li><span class="label label-warning"><a href="#" target="_self" title="查看笔记">6</a></span><label>笔记</label></li>
                                      <li><span class="label label-danger"><a href="#" target="_self" title="查看友链">31</a></span><label>友链</label></li>
                                  </ul>
                              </div>
                            </div><!-- /panel-info -->
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('public/footer');?>


