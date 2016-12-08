<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 20:49:40
         compiled from "application/views/errors/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1943058250584827838b5dd9-21077616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ea1434f43512a2388ae277039dec1d697b8f64' => 
    array (
      0 => 'application/views/errors/404.tpl',
      1 => 1481201375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1943058250584827838b5dd9-21077616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584827838ef651_82151592',
  'variables' => 
  array (
    'uri' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584827838ef651_82151592')) {function content_584827838ef651_82151592($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>找不到相应的内容</h5>
                    </div>
                    <div class="widget-content">
                        <div class="error_ex">
                            <h1>404</h1>
                            <h3>找不到相应的内容.</h3>
                            <a class="btn btn-warning btn-big"  href="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
">返回首页</a> </div>
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
