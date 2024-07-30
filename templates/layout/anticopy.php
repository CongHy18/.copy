
<?php $name_host = $_SERVER['HTTP_HOST'];?>
<script type="text/javascript" defer="defer">function clickIE(){if(document.all)return!1}
function clickNS(e){if((document.layers||document.getElementById&&!document.all)&&(2==e.which||3==e.which))return!1}
document.onkeydown=function(e){if(event.keyCode==123){showNotify('Copyright © <?=$name_host?>!','Thông báo','error');return!1}
if((e=e||window.event).ctrlKey)
switch(e.which||e.keyCode){case 65:case 80:case 83:case 85:case 117:return showNotify('Copyright © <?=$name_host?>!','Thông báo','error'),!1}
if((e=e||window.event).ctrlKey&&(e=e||window.event).shiftKey)
switch(e.which||e.keyCode){case 67:return showNotify('Copyright © <?=$name_host?>!','Thông báo','error'),!1}};var message="Copyright © <?=$name_host?>!";document.layers?(document.captureEvents(Event.MOUSEDOWN),document.onmousedown=clickNS):(document.onmouseup=clickNS,document.oncontextmenu=clickIE,document.onselectstart=clickIE),document.oncontextmenu=new Function("showNotify(message,'Thông báo','error'); return false;");</script>
<style>
    body {
        -moz-user-select: none !important;
        -webkit-touch-callout: none !important;
        -webkit-user-select: none !important;
        -khtml-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important;
    }
</style>