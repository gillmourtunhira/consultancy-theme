<?php
/**
 * The template for displaying the footer
 *
 * @package Consultancy_Theme
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <?php if (is_active_sidebar('footer-widgets')) : ?>
        <div class="footer-widgets-area">
            <div class="container">
                <div class="footer-widgets-wrapper">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="site-info">
            <div class="container">
                <div class="site-info-wrapper">
                    <div class="copyright">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                        <?php echo esc_html__('All rights reserved.', 'consultancy'); ?>
                    </div>
                    
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-menu',
                        'container'      => 'nav',
                        'container_class' => 'footer-navigation',
                        'menu_class'     => 'footer-menu',
                        'depth'          => 1,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>