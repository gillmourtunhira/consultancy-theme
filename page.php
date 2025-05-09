<?php get_header(); ?>

<?php

if( have_rows('flexible_content') ):

     // loop through the rows of data
    while ( have_rows('flexible_content') ) : the_row();

        include 'partials/blocks/' . get_row_layout() . '.php';

    endwhile;

else :

    // no layouts found

endif;
?>

<?php get_footer();