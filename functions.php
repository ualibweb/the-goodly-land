<?php
/*
 * Functions and definitions.
 */

// Register the navigation menu.
add_action( 'init', function() {
  register_nav_menus( array( 'navigation-menu' => __( 'Navigation Menu' ) ) );
} );
?>
