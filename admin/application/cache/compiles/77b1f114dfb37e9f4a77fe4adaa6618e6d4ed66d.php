<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 22:38:08
         compiled from "application/views/product/recycle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168584696158496cd77ace70-43514686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abaa987a306df26a77ef0de716ae324656c9f30c' => 
    array (
      0 => 'application/views/product/recycle.tpl',
      1 => 1481207718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168584696158496cd77ace70-43514686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58496cd77af369_97635131',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496cd77af369_97635131')) {function content_58496cd77af369_97635131($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                        <h5>产品回收站</h5>
                    </div>
                    <div id="product-list-content">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="is_del" value="1">
</div>

<!--end-main-container-part-->


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
