<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:56:57
         compiled from "application/views/product/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37147844584982c9123233-17757558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de28027457ebabadf2418d1d0b1f8b53d1867eb' => 
    array (
      0 => 'application/views/product/detail.tpl',
      1 => 1481203674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37147844584982c9123233-17757558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_new' => 0,
    'product' => 0,
    'cate' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584982c9198b96_34208810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584982c9198b96_34208810')) {function content_584982c9198b96_34208810($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
<!--header part-->
<?php echo $_smarty_tpl->getSubTemplate ("public/header_part.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--end header part-->

<!--sidebar-menu-->
<?php echo $_smarty_tpl->getSubTemplate ('public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <?php echo $_smarty_tpl->getSubTemplate ('public/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-list-alt"></i> </span>
                        <h5><?php if ($_smarty_tpl->tpl_vars['is_new']->value) {?>添加产品<?php } else { ?>产品详情<?php }?></h5>
                    </div>
                    <form action="<?php echo getBaseUrl('/product/save.html');?>
" method="post" class="form-horizontal" id="form">
                        <div class="widget-content nopadding">
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">产品名称</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="product_name" placeholder="产品名称" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['Fproduct_name'])===null||$tmp==='' ? '' : $tmp);?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">产品分类</label>
                                    <div class="controls">
                                        <select name="category_id" class="span11" id="category_id">
                                            <option value="">请选择产品分类</option>
                                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Fcategory_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['product']->value['Fcategory_id'])&&$_smarty_tpl->tpl_vars['product']->value['Fcategory_id']==$_smarty_tpl->tpl_vars['c']->value['Fcategory_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['Fcategory_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">产品库存</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="product_num" placeholder="产品库存" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['Fproduct_num'])===null||$tmp==='' ? '' : $tmp);?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">产品价格</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="product_price" placeholder="产品价格" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['Fproduct_price'])===null||$tmp==='' ? '' : $tmp);?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">产品备注</label>
                                    <div class="controls">
                                        <textarea class="span11" name="remark" placeholder="产品备注"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['Fremark'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-success" value="提 交" />
                                <a href="<?php echo getBaseUrl('/product.html');?>
" class="btn" title="返回列表">返回列表</a>
                            </div>
                            <input type="hidden" name="product_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['Fproduct_id'])===null||$tmp==='' ? '' : $tmp);?>
">
                            <input type="hidden" name="is_new" value="<?php echo $_smarty_tpl->tpl_vars['is_new']->value;?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
