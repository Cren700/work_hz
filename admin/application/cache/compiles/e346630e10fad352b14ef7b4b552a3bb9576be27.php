<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 21:27:56
         compiled from "application/views/product/cate_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14471152995849526fb9ceb4-53472095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37c3ab8a165bfdeb84d5ec639b2aad02dc0e612a' => 
    array (
      0 => 'application/views/product/cate_detail.tpl',
      1 => 1481203665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14471152995849526fb9ceb4-53472095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5849526fc0bdf9_78525331',
  'variables' => 
  array (
    'is_new' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849526fc0bdf9_78525331')) {function content_5849526fc0bdf9_78525331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                        <h5><?php if ($_smarty_tpl->tpl_vars['is_new']->value) {?>添加产品分类<?php } else { ?>产品分类详情<?php }?></h5>
                    </div>
                    <form action="<?php echo getBaseUrl('/product/saveCate.html');?>
" method="post" class="form-horizontal" id="form">
                        <div class="widget-content nopadding">
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">分类名称</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="category_name" placeholder="分类名称" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cate']->value['Fcategory_name'])===null||$tmp==='' ? '' : $tmp);?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">分类说明</label>
                                    <div class="controls">
                                        <textarea class="span11" name="remark" placeholder="分类说明"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['cate']->value['Fremark'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-success" value="提 交" />
                                <a href="<?php echo getBaseUrl('/product/cate');?>
" class="btn" title="返回列表">返回列表</a>
                            </div>
                            <input type="hidden" name="category_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cate']->value['Fcategory_id'])===null||$tmp==='' ? '' : $tmp);?>
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
