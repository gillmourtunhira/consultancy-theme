<?php

// Get Service CPT posts

$args = array(
    'post_type' => 'service',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC'
);

$query = new WP_Query($args);

?>

<section class="services-section">
        <div class="container">
            <div class="section-header text-left">
                <h2 class="section-title"><?php echo __('Providing best service', 'consultancy'); ?></h2>
                <p class="section-subtitle"><?php echo __('We offer a range of services to help you grow your business and achieve your goals.', 'consultancy'); ?></p>
            </div>
            
            <div class="services-grid">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <h3 class="service-title"><?php the_title(); ?></h3>
                    <p class="service-description"><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>