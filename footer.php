<?php
/**
 * The template for displaying the footer
 *
 * @package Consultancy_Theme
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer py-20 bg-black">       
        <div class="site-info">
            <div class="container">
                <div class="site-info-wrapper">
                    <div class="copyright">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                        <?php echo esc_html__('All rights reserved.', 'consultancy'); ?>
                    </div>
                    <div class="footer-menu-wrapper">
                        <div class="footer-menu-label">
                            <h3><?php echo esc_html__('Get to know Us', 'consultancy'); ?></h3>
                        </div>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'menu_id'        => 'footer-menu',
                                'container'      => 'nav',
                                'container_class' => 'footer-navigation',
                                'menu_class'     => 'footer-menu p-0',
                                'depth'          => 1,
                                'fallback_cb'    => false,
                            ));
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>