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