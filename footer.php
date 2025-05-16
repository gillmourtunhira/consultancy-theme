<?php
/**
 * The template for displaying the footer
 *
 * @package Consultancy_Theme
 */

 $options = get_option('consultancy_theme_options');
 $primary_color = isset($options['primary_color']) ? $options['primary_color'] : '#e4f4f1';
?>

    </div><!-- #content -->
    <div class="footer-container" style="background-color: <?php echo esc_attr($primary_color); ?>;">
    <footer id="colophon" class="site-footer py-20 bg-black">       
        <div class="site-info">
            <div class="container">
                <div class="site-info-wrapper">
                    <div class="logo-wrapper">
                        <div class="logo-wrapper-top">
                            <div class="footer-company-logo">
                                <?php
                                    $options = get_option('consultancy_theme_options');
                                    $footer_text = isset($options['footer_text']) ? $options['footer_text'] : '';
                                    $logo = isset($options['company_logo']) ? $options['company_logo'] : '';
                                    if (!empty($logo)) {
                                        echo '<img src="' . esc_url($logo) . '" alt="Company Logo" class="company-logo-img">';
                                    }
                                ?>
                            </div>
                            <div class="social-media-wrapper my-8">
                            <?php
                                $options = get_option('consultancy_theme_options');
                                $linkedin = isset($options['linkedin']) ? $options['linkedin'] : '';
                                $github = isset($options['github']) ? $options['github'] : '';
                                $whatsapp = isset($options['whatsapp']) ? $options['whatsapp'] : '';
                            ?>
                            <div class="social-media-icons">
                                <ul class="social-icons">
                                    <?php
                                        if (!empty($linkedin)) {
                                            echo '<li><a href="' . esc_url($linkedin) . '" target="_blank"><svg fill="#a5a4a4" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M41.4,508.1H-8.5V348.4h49.9 V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7c18.4,0,29.7,11.9,30.1,27.7 C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4c-14.9,0-23.2,10-27,19.6 c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6c35.5,0,63.3,23,63.3,72.4V508.1z "></path> </g></svg></a></li>';
                                        }
                                        if (!empty($github)) {
                                            echo '<li><a href="' . esc_url($github) . '" target="_blank"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#a5a4a4" stroke="#a5a4a4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>github [#142]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#a5a4a4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]"> </path> </g> </g> </g> </g></svg></a></li>';
                                        }
                                        if (!empty($whatsapp)) {
                                            echo '<li><a href="' . esc_url($whatsapp) . '" target="_blank" rel="noopener"><svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#a5a4a4" stroke="#a5a4a4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>whatsapp [#128]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7599.000000)" fill="#a5a4a4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M259.821,7453.12124 C259.58,7453.80344 258.622,7454.36761 257.858,7454.53266 C257.335,7454.64369 256.653,7454.73172 254.355,7453.77943 C251.774,7452.71011 248.19,7448.90097 248.19,7446.36621 C248.19,7445.07582 248.934,7443.57337 250.235,7443.57337 C250.861,7443.57337 250.999,7443.58538 251.205,7444.07952 C251.446,7444.6617 252.034,7446.09613 252.104,7446.24317 C252.393,7446.84635 251.81,7447.19946 251.387,7447.72462 C251.252,7447.88266 251.099,7448.05372 251.27,7448.3478 C251.44,7448.63589 252.028,7449.59418 252.892,7450.36341 C254.008,7451.35771 254.913,7451.6748 255.237,7451.80984 C255.478,7451.90987 255.766,7451.88687 255.942,7451.69881 C256.165,7451.45774 256.442,7451.05762 256.724,7450.6635 C256.923,7450.38141 257.176,7450.3464 257.441,7450.44643 C257.62,7450.50845 259.895,7451.56477 259.991,7451.73382 C260.062,7451.85686 260.062,7452.43903 259.821,7453.12124 M254.002,7439 L253.997,7439 L253.997,7439 C248.484,7439 244,7443.48535 244,7449 C244,7451.18666 244.705,7453.21526 245.904,7454.86076 L244.658,7458.57687 L248.501,7457.3485 C250.082,7458.39482 251.969,7459 254.002,7459 C259.515,7459 264,7454.51465 264,7449 C264,7443.48535 259.515,7439 254.002,7439" id="whatsapp-[#128]"> </path> </g> </g> </g> </g></svg></a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="footer-text">
                                <h3 class="mb-4 text-white"><?php echo esc_html($footer_text); ?></h3>
                            </div>
                            <div>
                                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                                <?php echo esc_html__('All rights reserved.', 'consultancy'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-menu-wrapper">
                        <div class="footer-menu-label">
                            <h3 class="text-white"><?php echo esc_html__('Get to know Us', 'consultancy'); ?></h3>
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
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>