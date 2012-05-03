<?php
/**
 * Base module
 *
 * @code 	require $modx->config['base_path'] . 'assets/modules/base/base.module.php';
 * @author	chernavin.a.a@mail.ru
 */

// Config, functions
require_once 'inc/config.inc.php';
require_once $mod_path . 'inc/func.inc.php';

// Start tpl
require_once $mod_path . 'tpl/top.tpl.php';

// Form values
$values = array();

// Action
switch($_POST['action'])
{
 
	// Install module
	case 'install':
		// Create table(s)
		foreach ($mod_table_sql as $sql)
		{
			$modx->db->query($sql);
		}
		
		header('Location: ' . $_SERVER['REQUEST_URI']);
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
		$modx->db->delete($mod_table[0], 'id = "' . intval($_POST['item_id']) . '"');
		
		redirect();
		break;

	// --------------------------------------------------------------------------	
	
	/**
	 * Default
	 */
	
	default:
		// Not installed
		if (mysql_num_rows(mysql_query('SHOW TABLES FROM ' . $dbase . ' LIKE "' . $mod_table[0] . '"')) == 0)
		{
			echo '<a href="#" onclick="post_form(\'install\', null);return false;">Установить модуль</a>';
		}
		else
		{
			$title = 'Список';
			require_once $mod_path . 'action/default.act.php';
    	}

}

// End tpl
require_once $mod_path . 'tpl/bottom.tpl.php';
