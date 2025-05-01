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
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Unlock your business potential</h1>
                    <p class="hero-subtitle">Take the next step in your online journey with a modern approach to web development and digital marketing.</p>
                    <a href="#contact" class="button button-primary">Get Started</a>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg" alt="Business professional with tablet">
                </div>
            </div>
            <div class="clients-logo-section">
                <div class="client-logos">
                    <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo-1.png" alt="Client Logo">
                    </div>
                    <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo-2.png" alt="Client Logo">
                    </div>
                    <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo-3.png" alt="Client Logo">
                    </div>
                    <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo-4.png" alt="Client Logo">
                    </div>
                    <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logo-5.png" alt="Client Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Providing best service</h2>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="button button-secondary">All Services</a>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-web.svg" alt="Web Design Icon">
                    </div>
                    <h3 class="service-title">Web Design</h3>
                    <p class="service-description">Custom designed websites that reflect your brand's unique identity.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-development.svg" alt="Development Icon">
                    </div>
                    <h3 class="service-title">Development</h3>
                    <p class="service-description">Powerful web applications built with modern technologies.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-brand.svg" alt="Brand Design Icon">
                    </div>
                    <h3 class="service-title">Brand Design</h3>
                    <p class="service-description">Logo and brand identity creation that makes a lasting impression.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-marketing.svg" alt="Marketing Icon">
                    </div>
                    <h3 class="service-title">Marketing</h3>
                    <p class="service-description">Digital marketing strategies that drive traffic and conversions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-image.jpg" alt="Team member">
                </div>
                <div class="about-text">
                    <div class="section-label">About Us</div>
                    <h2 class="section-title">Studying the business and offering most effective solutions</h2>
                    <p class="section-description">We take time to understand your business goals and challenges before recommending tailored solutions that drive real results.</p>
                    
                    <div class="stats-container">
                        <div class="stat-item">
                            <span class="stat-number">400+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5.0/5</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                    </div>
                    
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="button button-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">We can show you a better way...</h2>
                <p class="section-description">Our proven methodology ensures projects are delivered on time, on budget, and exceed your expectations.</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('process'))); ?>" class="button button-secondary">Learn More</a>
            </div>
            
            <div class="process-grid">
                <div class="process-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-image-1.jpg" alt="Team collaboration">
                </div>
                <div class="process-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-image-2.jpg" alt="Design workshop">
                </div>
                <div class="process-step">
                    <div class="step-number">01</div>
                    <h3 class="step-title">Discovery</h3>
                    <p class="step-description">We begin by learning about your business, goals, and audience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section">
        <div class="container">
            <div class="section-header">
                <div class="section-label">Portfolio</div>
                <h2 class="section-title">Featured latest works</h2>
            </div>
            
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-1.jpg" alt="Mobile application design">
                    </div>
                    <h3 class="portfolio-title">Mobile Application Design</h3>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-2.jpg" alt="Website Logo Installation">
                    </div>
                    <h3 class="portfolio-title">Website Logo Installation</h3>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-3.jpg" alt="Kudos Company Branding">
                    </div>
                    <h3 class="portfolio-title">Kudos Company Branding</h3>
                </div>
            </div>
            
            <div class="portfolio-cta">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio'))); ?>" class="button button-primary">View All Works</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently asked questions</h2>
            </div>
            
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is your turnaround time?</h3>
                        <span class="faq-toggle"></span>
                    </div>
                    <div class="faq-answer">
                        <p>Our typical project timeline ranges from 4-12 weeks depending on complexity. We'll provide a detailed timeline during our initial consultation.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What types of projects do you take on?</h3>
                        <span class="faq-toggle"></span>
                    </div>
                    <div class="faq-answer">
                        <p>We specialize in website design and development, brand identity, e-commerce solutions, and digital marketing campaigns for small to mid-sized businesses.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you charge for projects?</h3>
                        <span class="faq-toggle"></span>
                    </div>
                    <div class="faq-answer">
                        <p>We offer both project-based pricing and retainer options. Our transparent pricing structure ensures no hidden fees or surprises.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does your work last?</h3>
                        <span class="faq-toggle"></span>
                    </div>
                    <div class="faq-answer">
                        <p>We build websites and digital solutions with longevity in mind. Our websites typically remain effective for 3-5 years before a refresh is recommended.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-cta">
                <div class="faq-cta-text">
                    <p>Also have questions? Let us know</p>
                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="button button-primary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <div class="section-label">Our Team</div>
                <h2 class="section-title">Meet our team of creators, designers and world class problem solvers.</h2>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-1.jpg" alt="Alex Miller">
                    </div>
                    <h3 class="team-name">Alex Miller</h3>
                    <p class="team-role">Lead Designer</p>
                </div>
                
                <div class="team-member">
                    <div class="team-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-2.jpg" alt="Amelia Taylor">
                    </div>
                    <h3 class="team-name">Amelia Taylor</h3>
                    <p class="team-role">Frontend Expert</p>
                </div>
                
                <div class="team-member">
                    <div class="team-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-3.jpg" alt="Luca Wilson">
                    </div>
                    <h3 class="team-name">Luca Wilson</h3>
                    <p class="team-role">Lead Developer</p>
                </div>
            </div>
            
            <div class="team-cta">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="button button-secondary">See More</a>
            </div>
        </div>
    </section>

    <!-- CTA/Contact Section -->
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
    
    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="section-header">
                <div class="section-label">Blog</div>
                <h2 class="section-title">Stay tuned with our latest news</h2>
            </div>
            
            <div class="blog-grid">
                <?php
                $blog_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                
                $blog_query = new WP_Query($blog_args);
                
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                <div class="blog-post">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date"><?php echo get_the_date(); ?></span>
                        </div>
                        <h3 class="blog-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="blog-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="blog-readmore">Read More →</a>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-container">
                <h2 class="newsletter-title">Subscribe newsletter</h2>
                <div class="newsletter-form">
                    <form action="#" method="post" class="subscribe-form">
                        <div class="input-group">
                            <input type="email" name="email" placeholder="Your email address" required>
                            <button type="submit" class="button button-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main><!-- #primary -->

<?php
get_footer();