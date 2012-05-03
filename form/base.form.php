<?php
/**
 * Base form
 */
?>

<p style="color:#f00;"><?= $errors ?></p>

<input name="send" type="hidden" value="">

Заголовок<br>
<input type="text" name="title" value="<?= isset($values['title']) ? $values['title'] : '' ?>">

<br><br>

Описание<br>
<textarea name="desc"><?= isset($values['desc']) ? $values['desc'] : '' ?></textarea>

<br><br>

<input type="button" value="<?= strpos($_POST['action'], '_edit') ? 'Редактировать' : 'Создать' ?>"
	onclick="post_form('<?= $_POST['action'] ?>', '<?= isset($_POST['item_id']) ? $_POST['item_id'] : '' ?>');">

&nbsp;

<input type="button" value="Отмена" onclick="post_form();">
