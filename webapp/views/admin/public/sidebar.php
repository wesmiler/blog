<div id="sidebar" class="col-xs-12 col-sm-12 col-md-3 sidebar-offcanvas">
      <div class="sidebar sidebar-left">
          <?php foreach($menu as $k => $m):?>
          <a  class="list-group-item m-list-<?=($k+1)?>" href="<?=$m[2]?>" data-toggle="<?=$m[1]?>" target="_self"><i></i><?=$m[0]?></a>
          <?php endforeach;?>
          <a class="list-group-item refresh" href="#cache" url="<?php echo site_url('admin/system/update_cache');?>" data-toggle="cache" target="_self"><i></i>更新缓存</a>
          <a class="list-group-item layout" href="#layout" url="<?php echo site_url('admin/index/layout');?>" data-toggle="layout" target="_self"><i></i>退出系统</a>
      </div>
</div>