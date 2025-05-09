<?php
function consultancy_service_post_type() {
    register_post_type( 'service',
        array(
            'labels' => array(
                'name_admin_bar' => 'Service',
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' ),
                'menu_name' => __( 'Services' ),
                'all_items' => __( 'All Services' ),
                'add_new' => __( 'Add New Service' ),
                'add_new_item' => __( 'Add New Service' ),
                'edit_item' => __( 'Edit Service' ),
                'new_item' => __( 'New Service' ),
                'view_item' => __( 'View Service' ),
                'search_items' => __( 'Search Services' ),
                'not_found' => __( 'No Services found' ),
                'not_found_in_trash' => __( 'No Services found in trash' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_icon' => get_template_directory_uri() . '/assets/images/icons/service.svg',
            'menu_position' => 5,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );
}
add_action( 'init', 'consultancy_service_post_type' );

// Portfolio CPT
function consultancy_portfolio_post_type() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name_admin_bar' => 'Portfolio',
                'name' => __( 'Portfolios' ),
                'singular_name' => __( 'Portfolio' ),
                'menu_name' => __( 'Portfolios' ),
                'all_items' => __( 'All Portfolios' ),
                'add_new' => __( 'Add New Portfolio' ),
                'add_new_item' => __( 'Add New Portfolio' ),
                'edit_item' => __( 'Edit Portfolio' ),
                'new_item' => __( 'New Portfolio' ),
                'view_item' => __( 'View Portfolio' ),
                'search_items' => __( 'Search Portfolios' ),
                'not_found' => __( 'No Portfolios found' ),
                'not_found_in_trash' => __( 'No Portfolios found in trash' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_icon' => get_template_directory_uri() . '/assets/images/icons/portfolio.svg',
            'menu_position' => 5,
            'rewrite' => array( 'slug' => 'portfolios' ),
        )
    );
}
add_action( 'init', 'consultancy_portfolio_post_type' );

// Testimonial CPT
function consultancy_testimonial_post_type() {
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name_admin_bar' => 'Testimonial',
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' ),
                'menu_name' => __( 'Testimonials' ),
                'all_items' => __( 'All Testimonials' ),
                'add_new' => __( 'Add New Testimonial' ),
                'add_new_item' => __( 'Add New Testimonial' ),
                'edit_item' => __( 'Edit Testimonial' ),
                'new_item' => __( 'New Testimonial' ),
                'view_item' => __( 'View Testimonial' ),
                'search_items' => __( 'Search Testimonials' ),
                'not_found' => __( 'No Testimonials found' ),
                'not_found_in_trash' => __( 'No Testimonials found in trash' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_icon' => get_template_directory_uri() . '/assets/images/icons/testimonial.svg',
            'menu_position' => 5,
            'rewrite' => array( 'slug' => 'testimonials' ),
        )
    );
}
add_action( 'init', 'consultancy_testimonial_post_type' );

// // Team CPT
// function consultancy_team_post_type() {
//     register_post_type( 'team',
//         array(
//             'labels' => array(
//                 'name_admin_bar' => 'Team',
//                 'name' => __( 'Teams' ),
//                 'singular_name' => __( 'Team' ),
//                 'menu_name' => __( 'Teams' ),
//                 'all_items' => __( 'All Teams' ),
//                 'add_new' => __( 'Add New Team' ),
//                 'add_new_item' => __( 'Add New Team' ),
//                 'edit_item' => __( 'Edit Team' ),
//                 'new_item' => __( 'New Team' ),
//                 'view_item' => __( 'View Team' ),
//                 'search_items' => __( 'Search Teams' ),
//                 'not_found' => __( 'No Teams found' ),
//                 'not_found_in_trash' => __( 'No Teams found in trash' ),
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
//             'capability_type' => 'post',
//             'hierarchical' => false,
//             'menu_icon' => get_template_directory_uri() . '/assets/images/icons/team_icon.svg',
//             'menu_position' => 5,
//             'rewrite' => array( 'slug' => 'teams' ),
//         )
//     );
// }
// add_action( 'init', 'consultancy_team_post_type' );


/**
 * Register Custom Post Type for Partials
 */
function create_partials_post_type() {
    $labels = array(
        'name'               => _x( 'Partials', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Partial', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Partials', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Partial', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Add New', 'partial', 'textdomain' ),
        'add_new_item'       => __( 'Add New Partial', 'textdomain' ),
        'new_item'           => __( 'New Partial', 'textdomain' ),
        'edit_item'          => __( 'Edit Partial', 'textdomain' ),
        'view_item'          => __( 'View Partial', 'textdomain' ),
        'all_items'          => __( 'All Partials', 'textdomain' ),
        'search_items'       => __( 'Search Partials', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Partials:', 'textdomain' ),
        'not_found'          => __( 'No partials found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No partials found in Trash.', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Reusable content blocks for your website', 'textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partial' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => get_template_directory_uri() . '/assets/images/icons/partial.svg',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
    );

    register_post_type( 'partial', $args );
}
add_action( 'init', 'create_partials_post_type' );
