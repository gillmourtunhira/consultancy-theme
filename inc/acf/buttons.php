<?php
/**
 * Register Buttons ACF Group with Repeater
 */
function register_buttons_acf_group() {
    if (function_exists('acf_add_local_field_group')) {
        // Register the Buttons Group with a UNIQUE key
        acf_add_local_field_group(array(
            'key' => 'group_buttons_' . uniqid(), // Generate unique key
            'title' => 'Buttons',
            'fields' => array(
                array(
                    'key' => 'field_buttons_repeater',
                    'label' => 'Buttons',
                    'name' => 'buttons',
                    'type' => 'repeater',
                    'instructions' => 'Add one or more buttons',
                    'required' => 0,
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Button',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_button_url',
                            'label' => 'Button URL',
                            'name' => 'button_url',
                            'type' => 'url',
                            'instructions' => 'Enter the URL for this button',
                            'required' => 1,
                        ),
                        array(
                            'key' => 'field_button_color',
                            'label' => 'Button Color',
                            'name' => 'button_color',
                            'type' => 'select',
                            'instructions' => 'Select the button color style',
                            'required' => 1,
                            'choices' => array(
                                'primary' => 'Primary Color',
                                'secondary' => 'Secondary Color',
                                'dark' => 'Dark',
                                'light' => 'Light',
                                'accent' => 'Accent Color',
                            ),
                            'default_value' => 'primary',
                        ),
                    ),
                ),
            ),
            'location' => array(
                // Set this to a location that won't actually display
                // Since we're only creating this for cloning purposes
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'acf-field-group',
                    ),
                    array(
                        'param' => 'post_status',
                        'operator' => '==',
                        'value' => 'auto-draft',
                    ),
                ),
            ),
            'active' => true,
        ));
    }
}
add_action('acf/init', 'register_buttons_acf_group');