<?php
/**
 * The template for displaying the front page
 *
 * @package Consultancy_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <?php get_template_part('template-parts/hero'); ?>

    <!-- Services Section -->
    <?php get_template_part('template-parts/services'); ?>

    <!-- About Section -->
    <?php get_template_part('template-parts/about'); ?>

    <!-- Process Section -->
    <?php get_template_part('template-parts/process'); ?>

    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/portfolio'); ?>

    <!-- FAQ Section -->
    <?php get_template_part('template-parts/faq'); ?>

    <!-- Team Section -->
    <?php get_template_part('template-parts/team'); ?>

    <!-- CTA/Contact Section -->
    <?php get_template_part('template-parts/cta'); ?>
    
    <!-- Blog Section -->
    <?php get_template_part('template-parts/blog'); ?>

    <!-- Newsletter Section -->
    <?php get_template_part('template-parts/newsletter'); ?>
</main><!-- #primary -->

<?php
get_footer();