<?php
/**
 * Base form
 */

// -----------------------------------------------------------------------------
?>

<p style="color:#f00;"><?= $errors ?></p>

<input name="send" type="hidden" value="">

Заголовок<br>
<input type="text" name="title" value="<?= isset($values['title']) ? $values['title'] : '' ?>">

<br><br>

Описание<br>
<textarea name="desc"><?= isset($values['desc']) ? $values['desc'] : '' ?></textarea>

<br><br>

<input type="button" value="<?= strpos($post_action, '_edit') ? 'Редактировать' : 'Создать' ?>"
	onclick="post_form('<?= $post_action ?>', '<?= $post_item_id ? $post_item_id : '' ?>');">

&nbsp;

<input type="button" value="Отмена" onclick="post_form();">
