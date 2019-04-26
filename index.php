<?php
/**
 * The main template.
 */

get_header();

if (have_posts()) :
  while (have_posts()) :
    the_post();
    echo '<h2>' . the_title() . '</h2>';
    the_content();
  endwhile;
endif;

get_footer();
?>
