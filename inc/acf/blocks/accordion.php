<?php

// Accordion Block

return [
    'key' => 'pivot_layout_accordion',
    'name' => 'accordion',
    'label' => 'Accordion',
    'display' => 'block',

    'sub_fields' => [
        [
            'key' => 'pivot_layout_accordion_label',
            'name' => 'label',
            'label' => 'Label',
            'type' => 'text',
        ],
        [
            'key' => 'pivot_layout_accordion_heading',
            'name' => 'heading',
            'label' => 'Heading',
            'type' => 'wysiwyg',
            'media_upload' => 0,
            'required' => 1,
        ],
        [
            'key' => 'pivot_layout_accordion_items',
            'name' => 'items',
            'label' => 'Items',
            'type' => 'repeater',
            'layout' => 'row',
            'sub_fields' => [
                [
                    'key' => 'pivot_layout_accordion_item_heading',
                    'name' => 'item_heading',
                    'label' => 'Item Heading',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'pivot_layout_accordion_item_content',
                    'name' => 'item_content',
                    'label' => 'Item Content',
                    'type' => 'textarea',
                    'media_upload' => 0,
                    'required' => 1,
                ],
            ],
        ],
        [
            'key' => 'pivot_layout_accordion_bottom_text',
            'name' => 'bottom_text',
            'label' => 'Bottom Text',
            'type' => 'text',
        ],
        [
            'key' => 'pivot_layout_accordion_button',
            'name' => 'button',
            'label' => 'Button',
            'type' => 'link',
            'required' => 0,
        ],
    ],
];