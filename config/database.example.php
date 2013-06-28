<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(	
	'default' => array
	(
		'type'		=> 'MySQL',
		'connection'	=> array(
			'hostname' => 'host',
			'database' => 'dbname',
			'username' => 'username',
			'password' => 'verysafe',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	)
);
