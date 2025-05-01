<section id="contact" class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-title">
                    <h2>Let's talk with experienced agency!</h2>
                </div>
                <div class="contact-form">
                    <?php 
                    // Check if Contact Form 7 is active
                    if (function_exists('wpcf7_contact_form')) {
                        echo do_shortcode('[contact-form-7 id="contact-form" title="Contact Form"]');
                    } else {
                        // Fallback form
                        ?>
                        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="consultation-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Tell us about your project" required></textarea>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="button button-primary">Send Message</button>
                            </div>
                            <input type="hidden" name="action" value="contact_form_submission">
                            <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>