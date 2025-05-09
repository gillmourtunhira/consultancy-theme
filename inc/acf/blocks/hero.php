<?php

// Hero Block

return [
  'key' => 'pivot_layout_hero',
  'name' => 'hero',
  'label' => 'Hero Block',
  'display' => 'block',

  'sub_fields' => [
    [
        'key' => 'pivot_layout_hero_file',
        'name' => 'file',
        'label' => 'Image / Video',
        'type' => 'file',
        'required' => 1,
        'mime_types' => 'jpeg,jpg,png',
        'wrapper' => [
            'width' => '50',
        ],
    ],
    [
        'key' => 'pivot_layout_hero_screen_size',
        'name' => 'screen_size',
        'label' => 'Screen Size',
        'type' => 'select',
        'instructions' => 'Select the hero screen size',
        'required' => 1,
        'choices' => [
            '' => 'Default',
            'half' => 'Half',
            'full' => 'Full',
        ],
        'default_value' => '',
        'wrapper' => [
            'width' => '50',
        ],
    ],
    [
        'key' => 'pivot_layout_hero_background_color',
        'name' => 'background_color',
        'label' => 'Background Color',
        'type' => 'select',
        'required' => 0,
        'instructions' => 'Select the background color style',
        'choices' => [
            'primary' => 'Primary Color',
            'secondary' => 'Secondary Color',
            'dark' => 'Dark',
            'light' => 'Light',
            'accent' => 'Accent Color',
        ],
        'wrapper' => [
            'width' => '50',
        ],
    ],
    [
        'key' => 'pivot_layout_hero_content_alignment',
        'name' => 'content_alignment',
        'label' => 'Content Alignment',
        'type' => 'select',
        'required' => 1,
        'instructions' => 'Select the content alignment',
        'choices' => [
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ],
        'default_value' => 'left',
        'wrapper' => [
            'width' => '50',
        ],
    ],
    [
        'key' => 'pivot_layout_hero_tagline',
        'name' => 'tagline',
        'label' => 'Tagline',
        'type' => 'text',
        'required' => 0,
    ],
    [
        'key' => 'pivot_layout_hero_content',
        'name' => 'content',
        'label' => 'Content',
        'type' => 'wysiwyg',
        'required' => 1,
    ],
    [
        'key' => 'pivot_layout_hero_buttons',
        'name' => 'buttons',
        'label' => 'Buttons',
        'type' => 'repeater',
        'sub_fields' => [
            [
                'key' => 'pivot_layout_hero_button',
                'name' => 'button',
                'label' => 'Button',
                'type' => 'link',
                'required' => 1,
            ],
            [
                'key' => 'pivot_layout_hero_button_color',
                'name' => 'button_color',
                'label' => 'Button Color',
                'type' => 'select',
                'instructions' => 'Select the button color style',
                'required' => 1,
                'choices' => [
                    'primary' => 'Primary Color',
                    'secondary' => 'Secondary Color',
                    'dark' => 'Dark',
                    'light' => 'Light',
                    'accent' => 'Accent Color',
                ],
                'default_value' => 'primary',
            ],
        ],
        'min' => 1,
        'max' => 2,
    ],
    [
        'key' => 'pivot_layout_hero_stack_logos_option',
        'name' => 'stack_logos_option',
        'label' => 'Stack Logos Option',
        'type' => 'true_false',
        'instructions' => 'Enable or disable stack logos',
        'default_value' => 0,
    ],
    [
        'key' => 'pivot_layout_hero_stack_logos',
        'name' => 'stack_logos',
        'label' => 'Stack Logos',
        'type' => 'repeater',
        'instructions' => 'Add stack logos',
        'conditional_logic' => [
            [
                'field' => 'pivot_layout_hero_stack_logos_option',
                'operator' => '==',
                'value' => 1,
            ],
        ],
        'sub_fields' => [
            [
                'key' => 'pivot_layout_hero_stack_logos_gallery',
                'name' => 'logos',
                'label' => 'Logos',
                'type' => 'gallery',
                'required' => 0,
            ],
        ],
    ],
  ],

  'min' => '',
  'max' => '',
];
  