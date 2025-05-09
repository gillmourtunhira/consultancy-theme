<?php

$layouts = [];

foreach( glob( __DIR__ . '/blocks/*.php' ) as $filename ){

    $layouts[basename($filename, '.php')] = include $filename;
}

acf_add_local_field_group([
    'key' => 'group_flexible_content_' . uniqid(),
    'title' => 'Flexible Content',

    'fields' => [
        [
            'key' => 'field_681cb58e9f6fd',
            'label' => 'Blocks',
            'name' => 'flexible_content',
            'type' => 'flexible_content',

            'layouts' => $layouts,

            'button_label' => 'Add Block',
            'min' => '',
            'max' => '',
        ]
    ],
    'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'service',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
]);