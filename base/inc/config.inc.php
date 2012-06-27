<?php
/**
 * Config
 */

// MODX
$base_path     = $modx->config['base_path'];
$site_url      = $modx->config['site_url'];
$table_prefix  = $modx->db->config['table_prefix'];
$manager_theme = $modx->config['manager_theme'];
$emailsender   = $modx->config['emailsender'];
$dbase         = $modx->db->config['dbase'];

// Module
$mod_path      = $base_path . 'assets/modules/base/';
$icons_dir     = 'media/style/' . $manager_theme . '/images/icons/';

$mod_name = 'Базовый модуль';

$mod_table = array(
	$table_prefix . 'base'
);

$mod_table_sql = array(
	'CREATE TABLE `' . $mod_table[0] . '`(
		`id` INT(11) NOT NULL AUTO_INCREMENT,
		`title` VARCHAR(256) NOT NULL,
		`desc` VARCHAR(4096) DEFAULT NULL,

		PRIMARY KEY (`id`)
	)'
);
