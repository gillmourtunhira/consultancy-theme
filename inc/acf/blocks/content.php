<?php
/**
 * Content
 */

return [
  'key' => 'pivot_layout_content',
  'name' => 'content',
  'label' => 'Content Block',
  'display' => 'block',

  'sub_fields' => [
    [
      'key' => 'pivot_layout_content_value',
      'label' => 'Content',
      'name' => 'content',
      'type' => 'wysiwyg',
      'required' => 1,
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 1,
    ],
  ],

  'min' => '',
  'max' => '',
];
