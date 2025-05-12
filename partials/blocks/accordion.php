<?php
    $label = get_sub_field('label');
    $heading = get_sub_field('heading');
    $bottom_text = get_sub_field('bottom_text');
    $button = get_sub_field('button');
?>
<!-- Accordion Block -->
<section class="faq-section bg-black">
        <div class="container">
            <div class="section-header">
                <div class="section-label text-white mb-3"><?php echo esc_html($label); ?></div>
                <?php echo $heading; ?>
            </div>
            
            <div class="faq-accordion text-white">
                <?php if (have_rows('items')): ?>
                    <?php while (have_rows('items')): the_row(); ?>
                        <?php
                            $item_heading = get_sub_field('item_heading');
                            $item_content = get_sub_field('item_content');
                        ?>
                        <div class="faq-item">
                        <div class="faq-question">
                            <h3><?php echo esc_html($item_heading); ?></h3>
                            <div class="faq-answer-expander">
                            <?php
                                getExpanderIcons();
                            ?>
                        </div>
                        <span class="faq-toggle"></span>
                    </div>
                    <div class="faq-answer" style="display: none;">
                        <p><?php echo esc_html($item_content); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <div class="faq-cta">
                <div class="faq-cta-text">
                    <p class="text-white"><?php echo esc_html($bottom_text); ?></p>
                </div>
                <a href="<?php echo esc_url($button['url']); ?>" class="button button-primary"><?php echo esc_html($button['title']); ?></a>
            </div>
        </div>
    </section>
<!-- End Accordion Block -->