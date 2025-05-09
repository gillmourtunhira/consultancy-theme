<?php

// Services Block

return [
  'key' => 'pivot_layout_services',
  'name' => 'services',
  'label' => 'Services Block',
  'display' => 'block',
  'sub_fields' => [
    [
      'key' => 'pivot_layout_services_content',
      'label' => 'Content',
      'name' => 'content',
      'type' => 'wysiwyg',
      'media_upload' => 0,
      'required' => 0,
    ],
    [
      'key' => 'pivot_layout_services_number_of_posts',
      'label' => 'Number of Posts',
      'name' => 'number_of_posts',
      'type' => 'number',
      'default_value' => 4,
      'min' => 2,
      'max' => 4,
      'wrapper' => [
        'width' => '50',
      ],
    ],
    [
      'key' => 'pivot_layout_services_order',
      'label' => 'Order',
      'name' => 'order',
      'type' => 'select',
      'choices' => [
        'ASC' => 'Ascending',
        'DESC' => 'Descending'
      ],
      'wrapper' => [
        'width' => '50',
      ],
    ],
    [
      'key' => 'pivot_layout_services_selected_services',
      'label' => 'Select Services',
      'name' => 'selected_services',
      'type' => 'relationship',
      'post_type' => ['service'],
      'return_format' => 'id', // or 'object' if you prefer
      'filters' => ['search'], // optional: can also include post_type or taxonomy
      'max' => 4, // optional limit
    ],
    [
      'key' => 'pivot_layout_services_button',
      'label' => 'Button',
      'name' => 'button',
      'type' => 'link',
      'required' => 0,
    ],
  ],
];
