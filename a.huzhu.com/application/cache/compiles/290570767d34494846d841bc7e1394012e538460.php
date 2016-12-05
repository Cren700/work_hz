<?php /* Smarty version Smarty-3.1.19, created on 2016-12-05 20:17:07
         compiled from "application/views/product/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:355795208584421a36c9663-78641981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a92b37086577415d45aeb053bd4b4e1ad683f4' => 
    array (
      0 => 'application/views/product/index.tpl',
      1 => 1480938584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '355795208584421a36c9663-78641981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584421a375a856_39933332',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584421a375a856_39933332')) {function content_584421a375a856_39933332($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
                        <h5>产品搜索</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">产品ID</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="产品ID">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label">产品名字</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="产品名字">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">搜索</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>产品信息</h5>
                        <span class="label label-info">添加</span> </div>
                    <!--table info-->

                    <!--end table info-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
    $(function(){
        $.ajax({
            url: '/product/query',
            data: {},
            dataType: 'JSON',
            type: 'JSON',
            success: function(){
                
            },
            error: function () {
                
            }
        })

    })
</script>
</body>
</html>
<?php }} ?>
