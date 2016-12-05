<{include file='public/header.tpl'}>
<body>
<!--header part-->
<{include file="public/header_part.tpl"}>

<!--end header part-->

<!--sidebar-menu-->
<{include file='public/menu.tpl'}>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <{include file='public/nav.tpl'}>
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


<{include file="public/footer.tpl"}>
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
