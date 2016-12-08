<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:57:17
         compiled from "application/views/product/verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:708336006584982dd278115-13027811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1cde1a2c00b180e1823c167a0fb5a39fc60fca' => 
    array (
      0 => 'application/views/product/verify.tpl',
      1 => 1481207777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '708336006584982dd278115-13027811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584982dd2ad936_26019678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584982dd2ad936_26019678')) {function content_584982dd2ad936_26019678($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>产品审核列表</h5>
                    </div>
                    <div id="product-list-content">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="status" value="1">
    <input type="hidden" name="is_del" value="0">
</div>

<!--end-main-container-part-->


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
