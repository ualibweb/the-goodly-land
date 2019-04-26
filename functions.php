<?php
/*
 * Functions and definitions.
 */

/* Enqueue the main stylesheet if an admin page is not attempting to be
displayed. */
if (!is_admin()) {
  wp_enqueue_style('style', get_stylesheet_uri());
}

// Register the navigation menu.
add_action('init', function() {
  register_nav_menus(array('navigation-menu' => __('Navigation Menu')));
});
?>
