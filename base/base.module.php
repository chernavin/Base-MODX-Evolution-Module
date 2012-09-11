<?php
/**
 * Base module
 *
 * @code 	require MODX_BASE_PATH . 'assets/modules/base/base.module.php';
 * @author	chernavin.a.a@mail.ru
 */

// -----------------------------------------------------------------------------

// Config, functions
require_once 'inc/config.inc.php';
require_once $mod_path . 'inc/func.inc.php';

// Start tpl
require_once $mod_path . 'tpl/top.tpl.php';
$title = '';

// Form values
$values = array();

// Input data
$post_item_id = intval($_POST['item_id']);
$post_action = $_POST['action'];

// -----------------------------------------------------------------------------

// Action
switch($post_action)
{
 
	// Install module
	case 'install':
		// Create table(s)
		foreach ($mod_table_sql as $sql)
		{
			$modx->db->query($sql);
		}
		
		redirect();
		break;
	
	// Reset, clear post
	case 'reset':
		
		$action = ! empty($_POST['item_id']) ? strval($_POST['item_id']) : NULL;
		redirect($action);
		break;
	
	// --------------------------------------------------------------------------
	
	/**
	 * Base
	 */
	
	case 'base_add':
		
		$title = 'Создать';
		
		require_once $mod_path . 'action/base_add.act.php';
		
		break;
		
	case 'base_edit':
	
		$title = 'Редактировать';
		
		require_once $mod_path . 'action/base_edit.act.php';
		
		break;
		
	case 'base_delete':
		$modx->db->delete($mod_table[0], 'id = "' . $post_item_id . '"');
		
		redirect();
		break;

	// --------------------------------------------------------------------------	
	
	/**
	 * Default
	 */
	
	default:
		// Not installed
		$query = $modx->db->query('SHOW TABLES FROM ' . $dbase . ' LIKE "' . $mod_table[0] . '"');

		if ($modx->db->getRecordCount($query) == 0)
		{
			echo '<a href="#" onclick="post_form(\'install\', null);return false;">Установить модуль</a>';
		}
		else
		{
			$title = 'Список';
			require_once $mod_path . 'action/default.act.php';
    	}

}

// -----------------------------------------------------------------------------

// End tpl
require_once $mod_path . 'tpl/bottom.tpl.php';
