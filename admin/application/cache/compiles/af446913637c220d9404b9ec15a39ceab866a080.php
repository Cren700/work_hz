<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:56:55
         compiled from "application/views/product/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1219798820584982629d3ee7-15660809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bef9968d366ccc1693cddbf23ed0b1f3cfe97547' => 
    array (
      0 => 'application/views/product/index.tpl',
      1 => 1481212613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219798820584982629d3ee7-15660809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58498262a1a585_51373712',
  'variables' => 
  array (
    'cate' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58498262a1a585_51373712')) {function content_58498262a1a585_51373712($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
                        <h5>产品搜索</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">产品ID</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="product_id" placeholder="产品ID">
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">产品分类</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id">
                                            <option value="">请选择产品分类</option>
                                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Fcategory_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Fcategory_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">搜索</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>产品信息</h5>
                        <a class="label label-info js-btn-add-product" href="<?php echo getBaseUrl('/product/add.html');?>
">添加产品</a>
                    </div>
                    <div id="product-list-content">

                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="is_del" value="0">
    </div>
</div>

<!--end-main-container-part-->


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
