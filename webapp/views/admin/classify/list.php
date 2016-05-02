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
                    <th>文章数</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $k => $ls): ?>                                
                <tr id="list_<?=($k+1)?>" class="d-list">
                    <td><input id="sel_<?=($k+1)?>" class="sel" type="checkbox" name="sel_<?=($k+1)?>" value="<?=($k+1)?>"/></td>
                    <td><?=$ls['id']?></td>
                    <td><a href="#detail" title="点击查看详细资料" onClick="return dertail('<?=$ls['id']?>','<?=$ls['username']?>','<?=site_url('/admin/user/detail')?>')"><?=$ls['username']?></a></td>
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
                        <!-- <button class="btn btn-warning btn-xs edit-btn" onClick="return edit_data(<?=$ls['id']?>,'list_<?=($k+1)?>')" >编辑</button> -->
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
                        <button class="btn btn-success btn-xs save-btn" onClick="return save_data(1,'list_1')" >添加子类</button>
                        <button class="btn btn-warning btn-xs edit-btn" onClick="return edit_data(1,'list_1')" >编辑</button>
                        <button class="btn btn-danger btn-xs del-btn"  onClick="return del_data(1,'list_1')">删除</button>
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