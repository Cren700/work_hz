<?php /* Smarty version Smarty-3.1.19, created on 2016-12-04 21:12:23
         compiled from "application/views/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915945236583ec1bbe158f1-63187989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ef0e9cbde8d978c4a99a54c7c651e43a29cdced' => 
    array (
      0 => 'application/views/public/header.tpl',
      1 => 1480857118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915945236583ec1bbe158f1-63187989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583ec1bbe457d0_38642617',
  'variables' => 
  array (
    'seo' => 0,
    'cssArr' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ec1bbe457d0_38642617')) {function content_583ec1bbe457d0_38642617($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/css/matrix-style.css" />
    <link rel="stylesheet" href="/static/css/matrix-media.css" />
    <link href="/static/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
    <link href="<?php echo getBaseUrl($_smarty_tpl->tpl_vars['css']->value['url']);?>
" rel="stylesheet" type="text/css">
    <?php } ?>
</head><?php }} ?>
