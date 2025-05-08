<?php
    $button_link = get_post_meta( get_the_ID(), '_consultancy_page_meta_button_link', true );
    $button_text = get_post_meta( get_the_ID(), '_consultancy_page_meta_button_text', true );
    if (filter_var($button_link, FILTER_VALIDATE_URL)) {
        $button_link = '<a href="' . esc_url($button_link) . '" class="button" target="_blank">' . esc_html($button_text) . '</a>';
    } else {
        $button_link = '<a href="#' . esc_attr($button_link) . '" class="button">' . esc_html($button_text) . '</a>';
    }

?>
<section class="hero-section">
        <div class="container">
            <div class="tagline">
                <h4 class="tagline-text"><?php echo __('Web Crafters', 'consultancy'); ?></h4>
            </div>
            <div class="hero-content">
                <div class="hero-text">
                    <?php
                        the_content();
                        if ( $button_link ) :
                            ?>
                                <?php echo $button_link; ?>
                            <?php 
                            endif;
                        ?>
                </div>
                <?php
                    if (has_post_thumbnail()) {
                ?>
                <div class="hero-image">
                    <?php the_post_thumbnail('full', array('class' => 'hero-image', 'alt' => get_the_title())); ?>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="stack-logo-section">
            <?php 
            $stack_logos = consultancy_get_stack_logos();
            if (!empty($stack_logos)) : 
            ?>
                <div class="stack-logos">
                    <?php foreach ($stack_logos as $logo) : ?>
                        <div class="stack-logo">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['title']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>