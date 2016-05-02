<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>博客系统后台首页</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/bootstrap4/dist/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/base.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/admin/index.min.css');?>">
<body>
<div id="wrapper" class="blog-wrapper">
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <div id="login" class="login-content col-xs-12 col-sm-12 col-md-12">
                    <div class="container">
                          <div class="page col-xs-offset-3 col-sm-offset-3 col-md-offset-3">
                              <ul class="pagination inline-block">
                                  <?php echo $page;?>
                              </ul>
                          </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="footer">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/footer.min.css');?>">
    <div class="container">
        <div class="copyright col-xs-12 col-sm-12 col-md-12">
            <p>copyright ©2015 <span><?php echo $sites['sitesname'];?></span>. All Rights Reserved. Power by <?php echo $sites['sitesname'];?> Inc.</p>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('sources/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/bootstrap4/dist/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/js/default.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/js/login.min.js');?>"></script>
</body>
</html>
