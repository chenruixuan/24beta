<h4><?php echo user()->getFlash('table_caption', t('tag_list_table', 'admin'));?></h4>
<div class="btn-toolbar">
    <button class="btn btn-small">全选</button>
    <button class="btn btn-small">反选</button>
    <button class="btn btn-small btn-danger">删除</button>
    <a class="btn btn-small btn-success" href=''><?php echo t('reload_data', 'admin');?></a>
</div>
<table class="table table-striped table-bordered beta-list-table">
    <thead>
        <tr>
            <th>#</th>
            <th class="span1 align-center">ID</th>
            <th class="span4"><?php echo t('tag_name', 'model');?></th>
            <th class="span1 align-center"><?php echo t('tag_post_nums', 'model');?></th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($models as $model):?>
        <tr>
            <td class="item-checkbox"><input type="checkbox" name="itemid[]" value="<?php echo $model->id;?>" /></td>
            <td class="align-center"><?php echo $model->id;?></td>
            <td><?php echo $model->name;?></td>
            <td class="align-center"><?php echo $model->post_nums;?></td>
            <td>#</td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php if ($pages):?>
<div class="pagination"><?php $this->widget('CLinkPager', array('pages'=>$pages, 'skin'=>'admin'));?></div>
<?php endif;?>
