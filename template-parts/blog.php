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