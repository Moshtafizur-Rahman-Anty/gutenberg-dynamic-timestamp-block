<?php
// This file is generated. Do not modify it manually.
return array(
	'dynamic-timestamp' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/dynamic-timestamp',
		'version' => '0.1.0',
		'title' => 'Dynamic Timestamp',
		'category' => 'widgets',
		'icon' => 'clock',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'displayMode' => array(
				'type' => 'string',
				'default' => 'current_year'
			)
		),
		'textdomain' => 'dynamic-timestamp',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
