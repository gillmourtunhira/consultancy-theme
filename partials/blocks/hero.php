<?php
    $media = get_sub_field('file');
    $background_color = get_sub_field('background_color');
    $content_alignment = get_sub_field('content_alignment');
    $tagline = get_sub_field('tagline');
    $content = get_sub_field('content');
    $stack_logos_option = get_sub_field('stack_logos_option');
    $screen_size = get_sub_field('screen_size');
?>
<!-- Hero Section -->
<section class="hero-section bg-<?php echo esc_attr($background_color); ?> hero-<?php echo esc_attr($screen_size); ?>">
        <div class="container">
            <div class="tagline">
                <h4 class="tagline-text"><?php echo $tagline; ?></h4>
            </div>
            <div class="hero-content">
                <div class="hero-text hero-text-<?php echo esc_attr($content_alignment); ?>">
                    <?php echo $content; ?>
                    <?php
                    if( have_rows('buttons') ):
                        while ( have_rows('buttons') ) : the_row();
                            $button = get_sub_field('button');
                            $button_color = get_sub_field('button_color');
                            ?>
                            <a href="<?php echo esc_url($button['url']); ?>" class="button <?php echo esc_attr($button_color); ?>"><?php echo esc_html($button['title']); ?></a>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <?php
                    if (!empty($media)) {
                ?>
                <div class="hero-image">
                    <img class="hero-image" src="<?php echo esc_url($media['url']); ?>" alt="<?php echo esc_attr($media['alt']); ?>">
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="stack-logo-section">
            <?php
            if ($stack_logos_option) : 
            ?>
                <div class="stack-logos">
                <?php
                if( have_rows('stack_logos') ):
                    while ( have_rows('stack_logos') ) : the_row();
                        $logo = get_sub_field('logos');
                        foreach ($logo as $logo) :
                            ?>
                            <div class="stack-logo">
                            <img class="stack-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['title']); ?>">
                        </div>
                        <?php
                        endforeach;
                    endwhile;
                endif;
                ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>
<!-- End Hero Section -->