<!-- CTA Block -->
 <?php

    $cta_media = get_sub_field('cta_media');
    $background_colour = get_sub_field('background_colour');
    $top_label = get_sub_field('top_label');
    $content = get_sub_field('content');
    $button = get_sub_field('button');  
    $anchor = get_sub_field('anchor');

?>
<section class="about-section bg-<?php echo esc_attr($background_colour); ?>" id="<?php echo esc_attr($anchor); ?>">
    <div class="container">
        <div class="about-content">
            <div class="about-image">
                <?php if( !empty($cta_media) ): ?>
                    <img src="<?php echo esc_url($cta_media['url']); ?>" alt="<?php echo esc_attr($cta_media['alt']); ?>">
                    <?php endif; ?>
                </div>
                <div class="about-text">
                    <div class="section-label"><?php echo $top_label; ?></div>
                    <?php echo $content; ?>
                    
                    <div class="stats-container">
                        <?php if( have_rows('stats_counter') ): ?>
                        <?php while( have_rows('stats_counter') ): the_row();
                                $number = get_sub_field('number');
                                $label = get_sub_field('label');
                                $suffix = get_sub_field('suffix');
                            ?>
                            <div class="stat-item">
                                <span class="stat-number"><?php echo $number; ?><?php echo ( !empty($suffix) ? ''. $suffix : '' ); ?></span>
                                <span class="stat-label"><?php echo $label; ?></span>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo esc_url($button['url']); ?>" class="button button-primary"><?php echo $button['title']; ?></a>
                </div>
            </div>
        </div>
    </section>
<!-- End CTA Block -->