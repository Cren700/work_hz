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
                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">产品ID</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="product_id" placeholder="产品ID">
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">产品分类</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id">
                                            <option value="">请选择产品分类</option>
                                            <{foreach $cate['list'] as $c}>
                                            <option value="<{$c.Fcategory_id}>"><{$c.Fcategory_name}></option>
                                            <{/foreach}>
                                        </select>
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
                        <a class="label label-info js-btn-add-product" href="<{'/product/add.html'|getBaseUrl}>">添加产品</a>
                    </div>
                    <div id="product-list-content">

                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="is_del" value="0">
    </div>
</div>

<!--end-main-container-part-->


<{include file="public/footer.tpl"}>
</body>
</html>
