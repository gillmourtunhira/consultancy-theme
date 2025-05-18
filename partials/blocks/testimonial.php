<?php
$background_colour = get_sub_field('background_colour');
?>
<!-- Testimonials Block -->
<section class="testimonials-section py-20 bg-<?php echo esc_attr($background_colour); ?>">
    <div class="container">
        <div class="testimonials-header-quote">
        <svg fill="#009688" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 30 30" xml:space="preserve" stroke="#009688"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M0,3.865v18.497h20.568L30,26.135v-3.772V3.865H0z M27.238,22.057L21.1,19.602H2.761V6.626H27.24v15.431H27.238z"></path> <g> <path d="M9.72,13.762H7.235v-2.21l1.041-2.103h0.957L8.637,11H9.72V13.762z M13.736,13.762H11.25v-2.21l1.041-2.103h0.957 L12.653,11h1.083V13.762z"></path> <path d="M16.264,12.465h2.485v2.209l-1.041,2.104h-0.957l0.595-1.551h-1.082V12.465L16.264,12.465z M20.279,12.465h2.486v2.209 l-1.041,2.104h-0.957l0.594-1.551h-1.084v-2.762H20.279z"></path> </g> </g> </g> </g></svg>
        </div>
        <div class="testimonials sloth" id="testimonials">
            
            <?php if( have_rows('testimonials') ): ?>
                <?php while( have_rows('testimonials') ): the_row();
                    $content = get_sub_field('content');
                    $author_name = get_sub_field('author_name');
                    $author_position = get_sub_field('author_position');
                ?>
                    <div class="sloth-slide testimonial">
                        <div class="testimonial-content">
                            <?php echo wp_kses_post($content); ?>
                        </div>
                        <div class="testimonial-info">
                            <div class="testimonial-author">
                                <h3 class="testimonial-author-name"><?php echo esc_html($author_name); ?></h3>
                                <p class="testimonial-author-position"><?php echo esc_html($author_position); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="scroll-buttons d-none">
                <button type="button" class="testimonials-arrow-left" id="testimonials-arrow-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                </button>
                <button type="button" class="testimonials-arrow-right" id="testimonials-arrow-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg>
                </button>
            </div>
    </div>
</section>
<!-- End Testimonials Block -->

