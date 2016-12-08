<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 23:52:25
         compiled from "application/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113951785958498050dadd65-98198861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cf06ddb1ffbd2fc49ba61ad86d99bcd0a35de4' => 
    array (
      0 => 'application/views/login/index.tpl',
      1 => 1481212334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113951785958498050dadd65-98198861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58498050de6d15_48070860',
  'variables' => 
  array (
    'seo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58498050de6d15_48070860')) {function content_58498050de6d15_48070860($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo baseCssUrl('bootstrap.min.css');?>
" />
    <link rel="stylesheet" href="<?php echo baseCssUrl('bootstrap-responsive.min.css');?>
" />
    <link rel="stylesheet" href="<?php echo baseCssUrl('matrix-login.css');?>
" />
    <link href="<?php echo getBaseUrl('/static/font-awesome/css/font-awesome.css');?>
" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
    <form id="loginform" method="post" class="form-vertical" action="<?php echo getBaseUrl('/login/dologin.html');?>
">
        <div class="control-group normal_text"> <h3><img src="<?php echo baseImgUrl('logo.png');?>
" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" placeholder="Username" name="user_id"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="passwd" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            <span class="pull-right"><input class="btn btn-success" type="submit" value="Login"></span>
        </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
        </div>
    </form>
</div>

<script src="<?php echo baseJsUrl('plugin/jquery.min.js');?>
"></script>
<script src="<?php echo baseJsUrl('login.js');?>
"></script>
</body>

</html>
<?php }} ?>
