<?php

/**
 * Escape string
 */
function esc($str)
{
	global $modx;	
	return $modx->db->escape($str);
}

/**
 * Redirect to action
 */
function redirect($action = '', $item_id = '')
{
	echo '<script>'.
			'window.onload = function(){' .
				'post_form("' . $action . '", "' . $item_id . '");' .
			'}'.
		'</script>';
}
