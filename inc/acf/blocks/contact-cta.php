<?php

/**
 * Contact CTA Block
 *
 * @package Consultancy_Theme
 */

return [
  'key' => 'pivot_layout_contact_cta',
  'name' => 'contact-cta',
  'label' => 'Contact CTA Block',
  'display' => 'block',
  'sub_fields' => [
    [
      'key' => 'pivot_layout_contact_cta_section_label',
      'name' => 'section_label',
      'label' => 'Section Label',
      'type' => 'text',
      'instructions' => 'Enter the section label',
      'required' => 0,
      'wrapper' => [
        'width' => '50',
      ],
    ],
    [
      'key' => 'pivot_layout_contact_cta_background_colour',
      'name' => 'background_colour',
      'label' => 'Background Colour',
      'instructions' => 'Select the background colour',
      'type' => 'select',
      'choices' => [
            'muted-yellow' => 'Muted Yellow',
            'yellow' => 'Yellow',
            'alice-blue' => 'Alice Blue',
            'bright-gray' => 'Bright Gray',
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
      'key' => 'pivot_layout_contact_cta_content',
      'name' => 'content',
      'label' => 'Content',
      'type' => 'wysiwyg',
      'media_upload' => 0,
      'required' => 1,
    ],
    [
      'key' => 'pivot_layout_contact_cta_contact_form',
      'name' => 'contact_form',
      'label' => 'Contact Form',
      'type' => 'textarea',
      'required' => 1,
    ],
  ],
];
 