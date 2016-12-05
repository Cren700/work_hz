<?php /* Smarty version Smarty-3.1.19, created on 2016-12-04 21:19:51
         compiled from "application/views/public/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57382328583ec1bbe48e78-32800597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a86e0e87d75715f2f8634e3c63cbcb9608a134ee' => 
    array (
      0 => 'application/views/public/footer.tpl',
      1 => 1480857585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57382328583ec1bbe48e78-32800597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583ec1bbe55463_61347518',
  'variables' => 
  array (
    'jsArr' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ec1bbe55463_61347518')) {function content_583ec1bbe55463_61347518($_smarty_tpl) {?>

<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2016 &copy; 互助之家提供技术支持</div>
</div>
<!--end-Footer-part-->
<script src="/static/js/excanvas.min.js"></script>
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/jquery.ui.custom.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/jquery.flot.min.js"></script>
<script src="/static/js/jquery.flot.resize.min.js"></script>
<script src="/static/js/jquery.peity.min.js"></script>
<script src="/static/js/fullcalendar.min.js"></script>
<script src="/static/js/matrix.js"></script>
<script src="/static/js/matrix.dashboard.js"></script>
<script src="/static/js/jquery.gritter.min.js"></script>
<script src="/static/js/matrix.interface.js"></script>
<script src="/static/js/matrix.chat.js"></script>
<script src="/static/js/jquery.validate.js"></script>
<script src="/static/js/matrix.form_validation.js"></script>
<script src="/static/js/jquery.wizard.js"></script>
<script src="/static/js/jquery.uniform.js"></script>
<script src="/static/js/select2.min.js"></script>
<script src="/static/js/matrix.popover.js"></script>
<script src="/static/js/jquery.dataTables.min.js"></script>
<script src="/static/js/matrix.tables.js"></script>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jsArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value['url'];?>
"></script>
<?php } ?><?php }} ?>
