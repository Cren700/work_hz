<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:34:01
         compiled from "application/views/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117474152158497d69161370-91209065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d3cef8a4d0bb8d2e6dd1bed80d23a287120c01' => 
    array (
      0 => 'application/views/public/header.tpl',
      1 => 1481114680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117474152158497d69161370-91209065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo' => 0,
    'cssArr' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58497d69180561_54622415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58497d69180561_54622415')) {function content_58497d69180561_54622415($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo baseCssUrl("bootstrap.min.css");?>
" />
    <link rel="stylesheet" href="<?php echo baseCssUrl("matrix-style.css");?>
" />
    <link rel="stylesheet" href="<?php echo baseCssUrl("matrix-media.css");?>
" />
    <link href="<?php echo getBaseUrl("/static/font-awesome/css/font-awesome.css");?>
" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
    <link href="<?php echo baseCssUrl($_smarty_tpl->tpl_vars['css']->value['url']);?>
" rel="stylesheet" type="text/css">
    <?php } ?>
</head><?php }} ?>
