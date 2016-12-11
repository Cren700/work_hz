if (typeof (HZ) == "undefined" || !HZ) {
    var HZ = {}
}

HZ.Posts = (function() {
    function _init(){
        // 获取列表
        _getList();

        $(document).on('click', '.pagination a', function(e){
            e.preventDefault();
            var p = $(this).attr('data-ci-pagination-page');
            _getList(p);
        });

        $(document).on('click', '.js-btn-status', function () {
            var _this = $(this);
            var url = baseUrl + '/posts/status.html';
            var status = _this.data('status');
            var data = {status: status, pid: _this.parents('tr').attr('rel')};
            HZ.Form.btnSubmit({
                t: 'post',
                u: url,
                e: _this,
                d: data,
                callback: function(){
                    var _p = _this.parent();
                    var s1 = '\
                        <button class="btn btn-primary btn-mini js-btn-status" data-status="1">审核不通过</button>\
                        <button class="btn btn-warning btn-mini js-btn-status" data-status="2">发布</button>\
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>';
                    var s2 = '\
                        <button class="btn btn-warning btn-mini js-btn-status" data-status="0">提交审核</button>\
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>';
                    var s3 = '\
                        <button class="btn btn-primary btn-mini js-btn-status" data-status="3">下架</button>\
                        <button class="btn btn-danger btn-mini js-btn-delete">删除</button>';
                    var s4 = '<button class="btn btn-danger btn-mini js-btn-delete">删除</button>';
                    switch (status){
                        case 0:
                            _this.parents('tr').find('.js-posts-status').text('待审核');
                            _p.html(s1);
                            break;
                        case 1:
                            _this.parents('tr').find('.js-posts-status').text('审核不通过');
                            _p.html(s2);
                            break;
                        case 2:
                            _this.parents('tr').find('.js-posts-status').text('已发布');
                            _p.html(s3);
                            break;
                        case 3:
                            _this.parents('tr').find('.js-posts-status').text('已发布');
                            _p.html(s4);
                            break;
                        default:
                            break;
                    }
                }
            })
        });

        $(document).on('click', '.js-btn-delete', function() {
            var _this = $(this);
            HZ.Dialog.showMsg({
                title: '系统提示',
                msg: "是否删除该资讯?",
                type: 'confirm',
                btnConfirm: function(){

                    var url = baseUrl + '/posts/status.html';
                    var data = {is_del: 1,status: 1, pid: _this.parents('tr').attr('rel')};
                    HZ.Form.btnSubmit({
                        t: 'post',
                        u: url,
                        e: _this,
                        d: data,
                        callback: function(){
                            _this.parents('tr').remove();
                        }
                    });
                }
            });
        });

        $(document).on('click', '.js-btn-recycle', function() {
            var _this = $(this);
            HZ.Dialog.showMsg({
                title: '系统提示',
                msg: "是否还原该资讯?",
                type: 'confirm',
                btnConfirm: function(){
                    var url = baseUrl + '/posts/status.html';
                    var data = {is_del: 0, pid: _this.parents('tr').attr('rel')};
                    HZ.Form.btnSubmit({
                        t: 'post',
                        u: url,
                        e: _this,
                        d: data,
                        callback: function(){
                            _this.parents('tr').remove();
                        }
                    });
                }
            });
        });

        $('.js-btn-submit').on('click', function(e) {
            e.preventDefault();
            _getList();
        });

    }

    function _getList(p){

        var id = $('input[name="id"]').val(),
            cate_id = $('select[name="category_id"]').val(),
            is_del = $('input[name="is_del"]').val(),
            status = $('input[name="status"]').val();
        p = p ? p : 1;
        $.ajax({
            url: baseUrl+'/posts/query',
            data: {p: p, id: id, category_id: cate_id, status: status, is_del: is_del},
            dataType: 'HTML',
            type: 'GET',
            success: function(res){
                if($('#posts-list-content').html()) {
                    $('#posts-list-content').html(res);
                }
            }
        });
    }

    return {
        init: _init
    }
})();

$(document).ready(function(){
    HZ.Posts.init();
})