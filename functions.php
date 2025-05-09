<?php
/**
 * Consultancy Theme functions and definitions
 *
 * @package Consultancy_Theme
 */

// Include custom navigation walker
require_once get_template_directory() . '/inc/class-consultancy-nav-walker.php';

// Include custom styles for the block editor
require_once get_template_directory() . '/inc/block-editor.php';

// Include custom functions
require_once get_template_directory() . '/inc/template-functions.php';

// Include custom template tags
require_once get_template_directory() . '/inc/template-tags.php';

// Register custom post types and taxonomies
require_once get_template_directory() . '/inc/post-types.php';

// Include customizer options
require_once get_template_directory() . '/inc/customizer.php';

// Include custom meta fields
// require_once get_template_directory() . '/inc/meta-fields.php';

// Include theme options
require_once get_template_directory() . '/inc/theme-options.php';

// Include ACF
require_once get_template_directory() . '/inc/acf.php';

// Theme setup
function consultancy_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Enable title tag support
    add_theme_support('title-tag');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'web-consultancy'),
        'footer' => esc_html__('Footer Menu', 'web-consultancy'),
    ));

    // HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add editor styles
    add_theme_support('editor-styles');
    add_editor_style('dist/css/editor-style.min.css');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for full and wide blocks
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'consultancy_setup');

// Enqueue scripts and styles
function consultancy_scripts() {

    wp_enqueue_script('wplink'); // Link modal
	wp_enqueue_style('wp-link'); // Optional: link modal styles

    // Enqueue google font
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap', array(), null);

    // Enqueue styles
    wp_enqueue_style( 'consultancy-style', get_template_directory_uri() . '/dist/css/main.min.css', array('google-font'), time() );

    // Enqueue scripts
    wp_enqueue_script(
        'consultancy-scripts',
        get_template_directory_uri() . '/dist/js/main.min.js',
        ['jquery', 'wplink'],
        time(),
        true
    );

    // Add comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'consultancy_scripts');

// Register widget areas
function consultancy_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'consultancy'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'web-consultancy'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widgets', 'web-consultancy'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'web-consultancy'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'consultancy_widgets_init');

// Custom excerpt length
function consultancy_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'consultancy_excerpt_length');

// Custom excerpt more
function consultancy_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'consultancy_excerpt_more');

// SVG support
function add_svg_support( $file_types ) {
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    return array_merge( $file_types, $new_filetypes );
}
add_filter( 'upload_mimes', 'add_svg_support' );

function svg_sanitization( $data, $file, $filename, $mimes ) {
    // Check if file is SVG
    if ( ! empty( $data['ext'] ) && $data['ext'] === 'svg' ) {
        if ( $data['type'] === 'image/svg+xml' ) {
            // Validate SVG content
            $content = file_get_contents( $file );
            // Basic security check - look for script tags or dangerous attributes
            if ( preg_match( '/.*?<script.*?>.*?<\/script>.*?/is', $content ) || 
                 preg_match( '/.*?(onload|onerror|onclick|onmouseover)=.*?/is', $content ) ) {
                $data['ext'] = '';
                $data['type'] = '';
            }
        }
    }
    return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'svg_sanitization', 10, 4 );

function display_svg_in_media_library() {
    echo '
    <style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action( 'admin_head', 'display_svg_in_media_library' );


