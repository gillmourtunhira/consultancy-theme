<?php

/**
 * Team Block
 * 
 * @package Consultancy_Theme
 * @since 1.0.0
 */

return [
    'key' => 'pivot_layout_team',
    'name' => 'team',
    'label' => __('Team', 'consultancy'),
    'display' => 'block',

    'sub_fields' => [
        [
            'key' => 'pivot_layout_team_section_label',
            'name' => 'section_label',
            'label' => __('Section Label', 'consultancy'),
            'type' => 'text',
        ],
        [
            'key' => 'pivot_layout_team_section_title',
            'name' => 'section_title',
            'label' => __('Section Title', 'consultancy'),
            'type' => 'wysiwyg',
            'instructions' => __('Enter the section title here.', 'consultancy'),
            'media_upload' => 0,
            'required' => 0,
        ],
        [
            'key' => 'pivot_layout_team_members',
            'name' => 'members',
            'label' => __('Members', 'consultancy'),
            'type' => 'repeater',
            'layout' => 'row',
            'sub_fields' => [
                [
                    'key' => 'pivot_layout_team_member_image',
                    'name' => 'image',
                    'label' => __('Image', 'consultancy'),
                    'type' => 'image',
                    ''
                ],
                [
                    'key' => 'pivot_layout_team_member_name',
                    'name' => 'name',
                    'label' => __('Name', 'consultancy'),
                    'type' => 'text',
                ],
                [
                    'key' => 'pivot_layout_team_member_role',
                    'name' => 'role',
                    'label' => __('Role', 'consultancy'),
                    'type' => 'text',
                ],
                [
                    'key' => 'pivot_layout_team_member_linkedin',
                    'name' => 'linkedin',
                    'label' => __('LinkedIn', 'consultancy'),
                    'type' => 'url',
                ],
            ],
            'min' => 1,
            'max' => 6,
        ],
        [
            'key' => 'pivot_layout_team_button',
            'name' => 'button',
            'label' => __('Button', 'consultancy'),
            'type' => 'link',
            'required' => 0,
        ],
    ],  
];