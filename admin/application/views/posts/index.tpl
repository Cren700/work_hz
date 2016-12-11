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
                        <h5>资讯搜索</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                            <div class="control-group" style="padding: 10px">
                                <div class="span4">
                                    <label style="display: inline-block">资讯ID</label>
                                    <input type="text" name="id" placeholder="资讯ID">
                                </div>
                                <div class="span4">
                                    <label style="display: inline-block">资讯分类</label>
                                    <select name="category_id" id="category_id">
                                        <option value="">请选择资讯分类</option>
                                        <{foreach $cate['list'] as $c}>
                                        <option value="<{$c.Fcategory_id}>"><{$c.Fcategory_name}></option>
                                        <{/foreach}>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success js-btn-submit">搜 索</button>
                                <input type="reset" class="btn btn-success" value="重 置"/>
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
                        <h5>资讯信息</h5>
                        <a class="label label-info js-btn-add-posts" href="<{'/posts/add.html'|getBaseUrl}>">添加资讯</a>
                    </div>
                    <div id="posts-list-content">

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
