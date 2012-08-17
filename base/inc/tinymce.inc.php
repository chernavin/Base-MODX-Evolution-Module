<?php
/**
 * TinyMCE
 */
?>

<script type="text/javascript" src="<?= MODX_BASE_URL ?>assets/plugins/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

tinyMCE.init({
language : "ru",
mode : "textareas",
theme : "advanced",
plugins : "table,emotions,preview,searchreplace,contextmenu,paste,fullscreen,visualchars",


theme_advanced_buttons1 :
"code,|,undo,redo,|,bold,italic,underline,strikethrough,|,removeformat,cut,copy,paste,|,bullist,numlist,|,link,unlink,|,image,|,sub,sup,|,charmap,formatselect,|,table",

theme_advanced_buttons2 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,
content_css : "assest/templates/me_template/style.css"
});

</script>
