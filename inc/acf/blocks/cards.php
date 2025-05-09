<?php
/**
 * Cards Block
 */

return [
  'key'     => 'pivot_layout_cards',
  'name'    => 'cards',
  'label'   => 'Cards Block',
  'display' => 'block',

  'sub_fields' => [
  	[
  		'key'	=>	'pivot_layout_cards_title',
  		'name'	=>	'title',
  		'label'	=>	'Title',
  		'type'	=>	'text',
  	],
  	[
  		'key'	=>	'pivot_layout_cards_logos',
  		'name'	=>	'logos',
  		'label'	=>	'Cards Logos',
  		'type'	=>	'repeater',
  		'sub_fields'	=>	[
  			[
  				'key'	=>	'pivot_layout_cards_logo_image',
  				'name'	=>	'image',
  				'label'	=>	'Image',
  				'type'	=>	'image',
  			],
  			[
  				'key'	=>	'pivot_layout_cards_logo_title',
  				'name'	=>	'title',
  				'label'	=>	'Title',
  				'type'	=>	'text',
  			],
  		],
  	],
  ],
];