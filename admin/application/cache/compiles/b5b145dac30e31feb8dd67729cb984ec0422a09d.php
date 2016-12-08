<?php /* Smarty version Smarty-3.1.19, created on 2016-12-08 22:34:04
         compiled from "application/views/public/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944622383584419bd901368-91410166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf783c3cb74e7d068d1687c61236b3f632a75450' => 
    array (
      0 => 'application/views/public/menu.tpl',
      1 => 1481206995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944622383584419bd901368-91410166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584419bd9045f7_46571562',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584419bd9045f7_46571562')) {function content_584419bd9045f7_46571562($_smarty_tpl) {?>
<div id="sidebar">
    <ul>
        <li class="submenu"> <a href="#"><i class="icon icon-th"></i> <span>商品管理</span></a>
            <ul>
                <li class="active"><a href="<?php echo getBaseUrl('/product.html');?>
">商品列表</a></li>
                <li><a href="<?php echo getBaseUrl('/product/add.html');?>
">添加商品</a></li>
                <li><a href="<?php echo getBaseUrl('/product/cate.html');?>
">商品分类</a></li>
                <li><a href="<?php echo getBaseUrl('/product/verify.html');?>
">商品审核</a></li>
                <li><a href="<?php echo getBaseUrl('/product/recycle.html');?>
">商品回收站</a></li>
                <li><a href="<?php echo getBaseUrl('/product.html');?>
">*收藏列表</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-bar-chart"></i> <span>订单管理</span> </a>
            <ul>
                <li><a href="error403.html">订单列表</a></li>
                <li><a href="error405.html">订单统计</a></li>
                <li><a href="error500.html">销售排行</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-th"></i> <span>资讯管理</span> </a>
            <ul>
                <li><a href="error403.html">资讯列表</a></li>
                <li><a href="error404.html">资讯发布</a></li>
                <li><a href="error405.html">资讯审核</a></li>
                <li><a href="error500.html">评论点赞</a></li>
                <li><a href="error500.html">评论审核</a></li>
                <li><a href="error500.html">*作家管理</a></li>
                <li><a href="error500.html">关注列表</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-trophy"></i> <span>财务管理</span> </a>
            <ul>
                <li><a href="error403.html">个人账户</a></li>
                <li><a href="error404.html">交易流水</a></li>
                <li><a href="error405.html">支付方式</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-tasks"></i> <span>广告推广管理</span> </a>
            <ul>
                <li><a href="error403.html">广告列表</a></li>
                <li><a href="error404.html">添加广告</a></li>
                <li><a href="error405.html">推荐设置</a></li>
                <li><a href="error405.html">*返利管理</a></li>
                <li><a href="error405.html">友情链接</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-info-sign"></i> <span>安全配置</span> </a>
            <ul>
                <li><a href="error403.html">修改密码</a></li>
                <li><a href="error404.html">数据库配置</a></li>
                <li><a href="error405.html">短信设置</a></li>
            </ul>
        </li>
    </ul>
</div><?php }} ?>
