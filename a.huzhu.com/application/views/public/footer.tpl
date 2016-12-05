

<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2016 &copy; 互助之家提供技术支持</div>
</div>
<!--end-Footer-part-->
<script src="/static/js/excanvas.min.js"></script>
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/jquery.ui.custom.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/jquery.flot.min.js"></script>
<script src="/static/js/jquery.flot.resize.min.js"></script>
<script src="/static/js/jquery.peity.min.js"></script>
<script src="/static/js/fullcalendar.min.js"></script>
<script src="/static/js/matrix.js"></script>
<script src="/static/js/matrix.dashboard.js"></script>
<script src="/static/js/jquery.gritter.min.js"></script>
<script src="/static/js/matrix.interface.js"></script>
<script src="/static/js/matrix.chat.js"></script>
<script src="/static/js/jquery.validate.js"></script>
<script src="/static/js/matrix.form_validation.js"></script>
<script src="/static/js/jquery.wizard.js"></script>
<script src="/static/js/jquery.uniform.js"></script>
<script src="/static/js/select2.min.js"></script>
<script src="/static/js/matrix.popover.js"></script>
<script src="/static/js/jquery.dataTables.min.js"></script>
<script src="/static/js/matrix.tables.js"></script>

<{foreach $jsArr as $js}>
    <script type="text/javascript" src="<{$js['url']}>"></script>
<{/foreach}>