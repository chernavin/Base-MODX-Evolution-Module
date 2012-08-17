<?php
/**
 * FCK browser window
 */
?>

<script type='text/javascript'>
var lastImageCtrl;
var lastFileCtrl;
function OpenServerBrowser(url, width, height ) {
var iLeft = (screen.width - width) / 2 ;
var iTop = (screen.height - height) / 2 ;
var sOptions = 'toolbar=no,status=no,resizable=yes,dependent=yes' ;
sOptions += ',width=' + width ;
sOptions += ',height=' + height ;
sOptions += ',left=' + iLeft ;
sOptions += ',top=' + iTop ;
var oWindow = window.open( url, 'FCKBrowseWindow', sOptions ) ;
}
function BrowseServer(ctrl) {
lastImageCtrl = ctrl;
var w = screen.width * 0.7;
var h = screen.height * 0.7;
OpenServerBrowser('<?= MODX_BASE_URL ?>manager/media/browser/mcpuk/browser.html?Type=images&Connector=/manager/media/browser/mcpuk/connectors/php/connector.php&ServerPath=/', w, h);
}
function BrowseFileServer(ctrl) {
lastFileCtrl = ctrl;
var w = screen.width * 0.7;
var h = screen.height * 0.7;
OpenServerBrowser('<?= MODX_BASE_URL ?>manager/media/browser/mcpuk/browser.html?Type=files&Connector=/manager/media/browser/mcpuk/connectors/php/connector.php&ServerPath=/', w, h);
}
function SetUrl(url, width, height, alt){
if(lastFileCtrl) {
var c = document.getElementById(lastFileCtrl);
if(c) c.value = url;
lastFileCtrl = '';
} else if(lastImageCtrl) {
var c = document.getElementById(lastImageCtrl);
if(c) c.value = url;
lastImageCtrl = '';
} else {
return;
}
}
</script>
