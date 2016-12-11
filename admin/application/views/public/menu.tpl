
<div id="sidebar">
    <ul>
        <{foreach $menu as $m}>
        <li class="<{if isset($m['sub'])}> submenu <{/if}><{if $m['selected']}> open <{/if}>"> <a href="#"><i class="icon <{$m['icon']|default:'icon-bar-chart'}>"></i> <span><{$m['name']}></span></a>
            <ul>
                <{foreach $m['sub'] as $s}>
                <li<{if $s['selected']}> class="active" <{/if}> ><a href="<{'/'|cat:$m['flagName']|cat:'/'|cat:$s['flagName']|cat:'.html'|getBaseUrl}>"><{$s['name']}></a></li>
                <{/foreach}>
            </ul>
        </li>
        <{/foreach}>
        <!--
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-trophy"></i> <span>财务管理</span> </a>
            <ul>
                <li><a href="#">个人账户</a></li>
                <li><a href="#">交易流水</a></li>
                <li><a href="#">支付方式</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-tasks"></i> <span>广告推广管理</span> </a>
            <ul>
                <li><a href="#">广告列表</a></li>
                <li><a href="#">添加广告</a></li>
                <li><a href="#">推荐设置</a></li>
                <li><a href="#">*返利管理</a></li>
                <li><a href="#">友情链接</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="javascript:void;"><i class="icon icon-info-sign"></i> <span>安全配置</span> </a>
            <ul>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">数据库配置</a></li>
                <li><a href="#">短信设置</a></li>
            </ul>
        </li>
        -->
    </ul>
</div>