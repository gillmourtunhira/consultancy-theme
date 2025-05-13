<!-- Team Block -->
 <?php
    $section_label = get_sub_field('section_label');
    $section_title = get_sub_field('section_title');
    $button = get_sub_field('button');
 ?>
<section class="team-section">
        <div class="container">
            <div class="section-header">
                <div class="section-label bg-yellow"><?php echo esc_html($section_label); ?></div>
                <?php echo $section_title; ?>
            </div>
            
            <div class="team-grid">
                <?php if( have_rows('members') ): ?>
                <?php while( have_rows('members') ) : the_row();
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                    $role = get_sub_field('role');
                    $linkedin = get_sub_field('linkedin');
                ?>
                <div class="team-member">
                    <div class="team-photo mb-2">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>">
                    </div>
                    <h3 class="team-name mb-0"><?php echo esc_html($name); ?></h3>
                    <p class="team-role mb-2"><?php echo esc_html($role); ?></p>
                    <a href="<?php echo esc_url($linkedin); ?>" class="team-linkedin" target="_blank">
                    <svg fill="#009e8b" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M41.4,508.1H-8.5V348.4h49.9 V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7c18.4,0,29.7,11.9,30.1,27.7 C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4c-14.9,0-23.2,10-27,19.6 c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6c35.5,0,63.3,23,63.3,72.4V508.1z "></path> </g></svg>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
            <div class="team-more mt-5 text-center">
                <a href="<?php echo esc_url($button['url']); ?>" class="button button-secondary"><?php echo esc_html($button['title']); ?></a>
            </div>
        </div>
    </section>
<!-- End Team Block -->