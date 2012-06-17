<?php
/**
 * Base snippet
 *
 * @code 	require $modx->config['base_path'] . 'assets/modules/base/base.snippet.php';
 * @author	chernavin.a.a@mail.ru
 */

// Config, functions
require_once 'inc/config.inc.php';
require_once $mod_path . 'inc/func.inc.php';

// Get
$query = $modx->db->select('*', $mod_table[0],  'id = "' . $id . '"');
$item = $modx->db->getRow($query);

// Echo
echo '<b>' . $item['title'] . '</b><br>';
echo $item['desc'];
