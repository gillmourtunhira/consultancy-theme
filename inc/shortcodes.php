<?php
/**
 * Services Block Shortcode
 * 
 * @param array $atts Shortcode attributes
 * @return string HTML output
 * 
 * @package Consultancy
 * @since 1.0.0
 * 
 */
function services_block_shortcode($atts) {
    $atts = shortcode_atts([], $atts, 'services_block');

    // Safeguard for ACF
    if (!function_exists('get_sub_field')) return '';

    // Get ACF fields
    $content = get_sub_field('content');
    $number_of_posts = get_sub_field('number_of_posts') ?: 4;
    $order = get_sub_field('order') ?: 'DESC';
    $selected_services = get_sub_field('selected_services'); // post IDs
    $button = get_sub_field('button'); // returns array: ['url', 'title', 'target']

    // Fallback: get latest services if none selected
    $query_args = [
        'post_type' => 'service',
        'posts_per_page' => $number_of_posts,
        'orderby' => 'date',
        'order' => $order,
    ];

    if (!empty($selected_services)) {
        $query_args['post__in'] = $selected_services;
        $query_args['orderby'] = 'post__in'; // preserve order of selected
    }

    $query = new WP_Query($query_args);

    ob_start(); ?>
    <!-- Services Block -->
    <section class="services-section my-20">
        <div class="container">
            <?php if ($content): ?>
                <div class="section-header text-left">
                    <?php echo wp_kses_post($content); ?>
                </div>
            <?php endif; ?>

            <div class="services-grid">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <h3 class="service-title"><?php the_title(); ?></h3>
                    <p class="service-description"><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <?php if (!empty($button) && !empty($button['url'])): ?>
                <div class="services-button text-center mt-4">
                    <a href="<?php echo esc_url($button['url']); ?>"
                       class="btn btn-primary"
                       target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">
                       <?php echo esc_html($button['title']); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End Services Block -->
    <?php return ob_get_clean();
}
add_shortcode('services_block', 'services_block_shortcode');
