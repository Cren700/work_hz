<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 21:21:41
         compiled from "application/views/product/cateList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206872417958494a4235fc24-10105760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aef2f9d107a7a524f7d5946287532a55022a06a9' => 
    array (
      0 => 'application/views/product/cateList.tpl',
      1 => 1481202257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206872417958494a4235fc24-10105760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58494a42360727_43982988',
  'variables' => 
  array (
    'cate' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58494a42360727_43982988')) {function content_58494a42360727_43982988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>产品分类</h5>
                        <a class="label label-info js-btn-add-product" href="/product/addCate.html">添加产品分类</a>
                    </div>
                    <div id="product-list-content">
                        <!--table info-->
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>产品分类</th>
                                    <th>分类说明</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['Fcategory_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['Fcategory_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['Fremark'];?>
</td>
                                    <td><a href="<?php echo getBaseUrl(('/product/getcate/').($_smarty_tpl->tpl_vars['c']->value['Fcategory_id']));?>
" class="btn btn-primary btn-mini js-btn-delete">编辑</a></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <!--end table info-->
                    </div>
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
