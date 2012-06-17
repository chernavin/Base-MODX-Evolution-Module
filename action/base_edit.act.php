<?php
/**
 * Base edit action
 */

$errors = array();
$values = array();

// Form is send
if (isset($_POST['send']))
{
	if (empty($_POST['title']))
	{
		$errors[] = 'Поле "Заголовок" не заполнено.';
	}
	
	// Check errors
	if (empty($errors))
	{
		$modx->db->update(array(
			'`title`' => esc($_POST['title']),
			'`desc`' => esc($_POST['desc'])
		), $mod_table[0], 'id = "' . $post_item_id . '"');
		
		redirect();
		exit;
	}
	else
	{
		$values = $_POST;
	}
}
else
{
	// Load values from db
	$query = $modx->db->select('*', $mod_table[0], 'id = "' . $post_item_id . '"');
	$values = $modx->db->getRow($query);
}

$errors = implode('<br>', $errors);

// Load form
require $mod_path . 'inc/tinymce.inc.php';
require $mod_path . 'form/base.form.php';
