<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:34:01
         compiled from "application/views/public/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188161170258497d691a2276-39373865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab1e4cc1a568a0e16f0c30e09ea0e84f75ccf24' => 
    array (
      0 => 'application/views/public/footer.tpl',
      1 => 1481197014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188161170258497d691a2276-39373865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jsArr' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58497d691ba223_58400732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58497d691ba223_58400732')) {function content_58497d691ba223_58400732($_smarty_tpl) {?>

<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2016 &copy; 互助之家提供技术支持</div>
</div>
<!--end-Footer-part-->
<script>
    var baseUrl = '<?php echo getBaseUrl('');?>
';
</script>
<script src="<?php echo baseJsUrl("plugin/excanvas.min.js");?>
"></script>
<script src="<?php echo baseJsUrl("plugin/jquery.min.js");?>
"></script>
<script src="<?php echo baseJsUrl("plugin/jquery.ui.custom.js");?>
"></script>
<script src="<?php echo baseJsUrl("plugin/bootstrap.min.js");?>
"></script>
<script src="<?php echo baseJsUrl("plugin/matrix.js");?>
"></script>
<script src="<?php echo baseJsUrl("common/global.js");?>
"></script>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jsArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
    <script type="text/javascript" src="<?php echo baseJsUrl($_smarty_tpl->tpl_vars['js']->value);?>
"></script>
<?php } ?><?php }} ?>
