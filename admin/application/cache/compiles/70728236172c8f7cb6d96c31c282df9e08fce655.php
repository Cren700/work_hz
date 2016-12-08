<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:55:14
         compiled from "application/views/product/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139165023558498262e23227-91568448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd517b95cb04a7ce8ace4a4594d4ea0a4f85ec1c4' => 
    array (
      0 => 'application/views/product/list.tpl',
      1 => 1481209606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139165023558498262e23227-91568448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'i' => 0,
    'cate' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58498262e9e2d8_15165345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58498262e9e2d8_15165345')) {function content_58498262e9e2d8_15165345($_smarty_tpl) {?>
<!--table info-->
<?php if (count($_smarty_tpl->tpl_vars['info']->value['list'])==0) {?>
<div class="alert alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
    <h4 class="alert-heading">温馨提示!</h4>
    无响应的产品信息
</div>
<?php } else { ?>
<div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>产品名称</th>
            <th>分类</th>
            <th>商家名称</th>
            <th>产品库存</th>
            <th>产品价格</th>
            <th>更新时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr rel="<?php echo $_smarty_tpl->tpl_vars['i']->value['Fproduct_id'];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Fproduct_id'];?>
</td>
                <td><a href="<?php echo getBaseUrl(("/product/detail/").($_smarty_tpl->tpl_vars['i']->value['Fproduct_id']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['i']->value['Fproduct_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Fproduct_name'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['i']->value['Fcategory_id']];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Fstore_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Fproduct_num'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Fproduct_price'];?>
</td>
                <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['i']->value['Fupdate_time']);?>
</td>
                <td class="js-product-status"><?php if ($_smarty_tpl->tpl_vars['i']->value['Fis_del']) {?>已删除<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['Fproduct_status']==1) {?>待审核<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['Fproduct_status']==2) {?>已上架<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['Fproduct_status']==3) {?>下架<?php } else { ?>已完成<?php }?></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value['Fis_del']) {?>
                        <button class="btn btn-danger btn-mini js-btn-recycle">还原</button>
                    <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['Fproduct_status']==1) {?>
                        <button class="btn btn-primary btn-mini js-btn-status" data-status="2">上架</button>
                        <button class="btn btn-warning btn-mini js-btn-status" data-status="3">下架</button>
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>
                    <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['Fproduct_status']==2) {?>
                        <button class="btn btn-warning btn-mini js-btn-status" data-status="3">下架</button>
                        <button class="btn btn-success btn-mini js-btn-status" data-status="4">已完成</button>
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>
                    <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['Fproduct_status']==3) {?>
                        <button class="btn btn-info btn-mini js-btn-status" data-status="1">审核不通过</button>
                        <button class="btn btn-primary btn-mini js-btn-status" data-status="2">上架</button>
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>
                    <?php } else { ?>
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>
                    <?php }?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php }?>
<!--end table info-->
<?php }} ?>
