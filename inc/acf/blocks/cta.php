<?php

// CTA Block

return [
  'key' => 'pivot_layout_cta',
  'name' => 'cta',
  'label' => 'CTA Block',
  'display' => 'block',

  'sub_fields' => [
    [
      'key' => 'pivot_layout_cta_media',
      'name' => 'cta_media',
      'label' => 'Media',
      'type' => 'file',
      'mime_types' => 'jpeg,jpg,png',
      'required' => 0,
      'wrapper' => [
        'width' => '50',
      ],
    ],
    [
      'key' => 'pivot_layout_cta_background_colour',
      'name' => 'background_colour',
      'type' => 'select',
      'choices' => [
            'muted-yellow' => 'Muted Yellow',
            'yellow' => 'Yellow',
            'primary' => 'Orange',
            'secondary' => 'Secondary Color',
            'green' => 'Green',
            'black' => 'Black',
            'white' => 'White',
            'muted-white' => 'Muted White',
            'background' => 'Light',
            'accent' => 'Accent Color',
        ],
      'default_value' => 'muted-yellow',
      'required' => 0,
      'wrapper' => [
        'width' => '50',
      ],
    ],
    [
      'key' => 'pivot_layout_cta_top_label',
      'name' => 'top_label',
      'label' => 'Top Label',
      'type' => 'text',
      'required' => 0,
      'wrapper' => [
        'width' => '70',
      ],
    ],
    [
      'key' => 'pivot_layout_cta_anchor',
      'name' => 'anchor',
      'label' => 'Anchor',
      'type' => 'text',
      'required' => 0,
      'wrapper' => [
        'width' => '30',
      ],
    ],
    [
      'key' => 'pivot_layout_cta_content',
      'label' => 'Content',
      'name' => 'content',
      'type' => 'wysiwyg',
      'media_upload' => 0,
      'required' => 0,
    ],
    [
      'key' => 'pivot_layout_cta_stats_counter',
      'name' => 'stats_counter',
      'label' => 'Stats Counter',
      'type' => 'repeater',
      'sub_fields' => [
        [
          'key' => 'pivot_layout_cta_stats_counter_label',
          'name' => 'label',
          'label' => 'Label',
          'type' => 'text',
          'required' => 0,
          'wrapper' => [
            'width' => '50',
          ],
        ],
        [
          'key' => 'pivot_layout_cta_stats_counter_number',
          'name' => 'number',
          'label' => 'Number',
          'type' => 'number',
          'required' => 0,
          'wrapper' => [
            'width' => '25',
          ],
        ],
        [
          'key' => 'pivot_layout_cta_stats_counter_suffix',
          'name' => 'suffix',
          'label' => 'Suffix',
          'type' => 'text',
          'required' => 0,
          'wrapper' => [
            'width' => '25',
          ],
        ],
      ],
      'required' => 0,
    ],
    [
      'key' => 'pivot_layout_cta_button',
      'label' => 'Button',
      'name' => 'button',
      'type' => 'link',
      'required' => 0,
    ],
  ],
];