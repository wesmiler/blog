<div id="footer" class="footer" role="footer">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/footer.min.css');?>">
    <div class="container">
        <div class="copyright">
            <?php if($sites['record']&&!$sites['count_code']): ?>
            <p><span>备案信息：<?php echo $sites['record'];?></span></p>
            <?php elseif($sites['record']&&$sites['count_code']): ?>
            <div class="code"><span>备案信息：<?php echo $sites['record'];?></span><div class="count-code"><?php echo $sites['count_code'];?></div></div>
            <?php endif; ?>
            <div class="menu">
                <a class="btn btn-link" href="#" target="_blank"><p class="text-default">关于我</p></a>
                <a class="btn btn-link" href="#" target="_blank"><p class="text-default">关于我</p></a>
                <a class="btn btn-link" href="#" target="_blank"><p class="text-default">关于我</p></a>
                <a class="btn btn-link" href="#" target="_blank"><p class="text-default">关于我</p></a>
            </div>
            <p>copyright ©2015 <span class="notice"><?php echo $sites['sitename'];?></span>. All Rights Reserved. Power by <?php echo $sites['sitename'];?> Inc.</p>
        </div>
        <div class="modal fade" id="Dialog" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><p class="text-center"></p></h4>
              </div>
              <div class="modal-body">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  <button type="button" class="btn btn-success">确定</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('sources/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/bootstrap4/dist/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/js/common.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/js/default.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sources/js/index.min.js');?>"></script>
</body>
</html>