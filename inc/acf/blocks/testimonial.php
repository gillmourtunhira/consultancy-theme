<?php

/**
 * Testimonial Block
 * 
 * @package Consultancy
 * @since 1.0.0
 */

return [
    'key' => 'pivot_layout_testimonial',
    'name' => 'testimonial',
    'label' => 'Testimonials Block',
    'layout' => 'block',

    'sub_fields' => [
        [
            'key' => 'pivot_layout_testimonial_section_label',
            'name' => 'section_label',
            'label' => 'Section Label',
            'type' => 'text',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'pivot_layout_testimonial_background_colour',
            'name' => 'background_colour',
            'label' => 'Background Colour',
            'type' => 'select',
            'wrapper' => [
                'width' => '50',
            ],
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
        ],
        [
            'key' => 'pivot_layout_testimonials',
            'label' => 'Testimonials',
            'name' => 'testimonials',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'pivot_layout_testimonial_content',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'textarea',
                ],
                [
                    'key' => 'pivot_layout_testimonial_author_name',
                    'label' => 'Author',
                    'name' => 'author_name',
                    'type' => 'text',
                    'wrapper' => [
                        'width' => '50',
                    ],
                ],
                [
                    'key' => 'pivot_layout_testimonial_author_position',
                    'label' => 'Author Position',
                    'name' => 'author_position',
                    'type' => 'text',
                    'wrapper' => [
                        'width' => '50',
                    ],
                ],
            ],
        ]     
    ],
];
