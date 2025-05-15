<!-- Contact CTA Block -->
 <?php
    $section_label = get_sub_field('section_label');
    $content = get_sub_field('content');
    $contact_form = get_sub_field('contact_form');
    $background_colour = get_sub_field('background_colour');
 ?>
<section id="contact" class="contact-section bg-<?php echo esc_attr($background_colour); ?> py-20">
        <div class="container">
            <div class="contact-container">
                <div class="contact-title">
                    <div class="section-label bg-yellow mb-4"><?php echo esc_html($section_label); ?></div>
                    <?php echo $content; ?>
                </div>
                    <?php 
                    // Check if Contact Form 7 is active
                    if (function_exists('wpcf7_contact_form')) {
                        echo do_shortcode($contact_form);
                    }
                    ?>
            </div>
        </div>
    </section>
<!-- End of Contact CTA Block -->