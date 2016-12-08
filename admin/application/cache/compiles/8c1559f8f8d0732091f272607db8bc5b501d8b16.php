<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:34:01
         compiled from "application/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209532687458497d69121da7-70087648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc46042e55b3586ad2f32f6ff410dd3fc53c8e9e' => 
    array (
      0 => 'application/views/home/index.tpl',
      1 => 1480859471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209532687458497d69121da7-70087648',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58497d6915bff6_70321221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58497d6915bff6_70321221')) {function content_58497d6915bff6_70321221($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

    <h1>欢迎登录互助之家后台!</h1>
</div>

<!--end-main-container-part-->


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
