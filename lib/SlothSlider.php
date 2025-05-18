<?php
// lib/SlothSlider.php
namespace Consultancy\Lib;

class SlothSlider {
    public static function init() {
        add_action('wp_enqueue_scripts', [__CLASS__, 'register_assets']);
    }

    public static function register_assets() {
        // Register the script
        wp_register_script(
            'sloth-slider',
            get_template_directory_uri() . '/assets/js/components/sloth.js',
            ['jquery'],
            null,
            true
        );

        // Register the style (if you want it separate)
        wp_register_style(
            'sloth-slider',
            get_template_directory_uri() . '/assets/css/components/sloth.css',
            [],
            null
        );
    }

    public static function enqueue() {
        wp_enqueue_script('sloth-slider');
        wp_enqueue_style('sloth-slider');
    }
}