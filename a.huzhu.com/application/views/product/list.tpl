<div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>产品名称</th>
            <th>分类</th>
            <th>商家名称</th>
            <th>产品库存</th>
            <th>产品价格</th>
            <th>更新时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <{foreach $info['list'] as $i}>
            <tr rel="<{$i['Fproduct_id']}>">
                <td><{$i['Fproduct_id']}></td>
                <td><{$i['Fproduct_name']}></td>
                <td><{$i['Fcategory_id']}></td>
                <td><{$i['Fstore_id']}></td>
                <td><{$i['Fproduct_num']}></td>
                <td><{$i['Fproduct_price']}></td>
                <td><{'Y-m-d H:i:s'|date:$i['Fupdate_time']}></td>
                <td><{$i['Fproduct_status']}></td>
                <td><span>删除</span><span>上线</span></td>
            </tr>
            <{/foreach}>
        </tbody>
    </table>
</div>
<{$page}>