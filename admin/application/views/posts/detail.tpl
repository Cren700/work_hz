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
                    <div class="widget-title"> <span class="icon"> <i class="icon-list-alt"></i> </span>
                        <h5><{if $is_new}>添加资讯<{else}>资讯详情<{/if}></h5>
                    </div>
                    <form action="<{'/posts/save.html'|getBaseUrl}>" method="post" class="form-horizontal" id="form" enctype="multipart/form-data">
                        <div class="widget-content nopadding">
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">标题</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="post_title" placeholder="标题" value="<{$posts['Fpost_title']|default:''}>">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">作者</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="post_author" placeholder="作者" value="<{$posts['Fpost_author']|default:''}>">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">资讯分类</label>
                                    <div class="controls">
                                        <select name="category_id" class="span11" id="category_id">
                                            <option value="">请选择资讯分类</option>
                                            <{foreach $cate['list'] as $c}>
                                            <option value="<{$c.Fcategory_id}>" <{if isset($posts['Fcategory_id']) && $posts['Fcategory_id'] eq $c.Fcategory_id }>selected<{/if}>><{$c.Fcategory_name}></option>
                                            <{/foreach}>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">摘要</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="post_excerpt" placeholder="摘要" value="<{$posts['Fpost_excerpt']|default:''}>">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">封面图片</label>
                                    <div class="controls">
                                        <input type="hidden" value="<{$posts['Fpost_coverimage']|default:''}>" name="post_coverimage">
                                        <img style="width: 200px; height:150px; <{if isset($posts['Fpost_coverimage']) && !$posts['Fpost_coverimage']}>display: none<{/if}>" src="<{$posts['Fpost_coverimage']|default:''}>" id="js-img-cover" alt="">
                                        <input class="btn btn-danger js-btn-del-cover" style="padding-right:20px; <{if isset($posts['Fpost_coverimage']) && !$posts['Fpost_coverimage']}>display: none<{/if}>" type="button" value="删除"/>
                                        <input type="file" id="file_upload">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">是否开发评论</label>
                                    <div class="controls" style="vertical-align: middle">
                                        <label style="display: inline-block">开放</label>
                                        <input type="radio" style="margin: 0" class="span2" value="1" name="comment_status" <{if isset($posts['Fcomment_status']) && $posts['Fcomment_status'] eq 1}>checked<{elseif !isset($posts['Fcomment_status'])}>checked<{/if}> />
                                        <label style="display: inline-block">禁止</label>
                                        <input type="radio" style="margin: 0" class="span2" value="0" name="comment_status" <{if isset($posts['Fcomment_status']) && $posts['Fcomment_status'] eq 0}>checked<{/if}>>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">内容</label>
                                    <div class="controls">
                                        <textarea class="span11" id="ud-content" name="post_content" placeholder="内容"><{$posts['Fpost_content']|default:''}></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-success js-btn-submit" value="提 交" />
                                <a href="<{'/posts.html'|getBaseUrl}>" class="btn" title="返回列表">返回列表</a>
                            </div>
                            <input type="hidden" name="id" value="<{$posts['Fid']|default:''}>">
                            <input type="hidden" name="is_new" value="<{$is_new}>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->


<{include file="public/footer.tpl"}>
</body>
</html>
