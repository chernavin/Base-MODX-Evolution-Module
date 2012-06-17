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

$output = '';

// Input data
$id = intval($id);
$rowTpl = isset($rowTpl) ? $rowTpl : '';

if ( ! empty($rowTpl))
{
	// Load from db
	$query = $modx->db->select('*', $mod_table[0],  'id = "' . $id . '"');
	$row = $modx->db->getRow($query);
	
	// Output
	if ($row)
	{
		$output .= $modx->parseChunk($rowTpl, $row, '[+', '+]');
	}
}

echo $output;
