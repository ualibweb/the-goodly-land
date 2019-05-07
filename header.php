<?php
/**
 * The header.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php is_front_page() || is_home() ? bloginfo('name') : wp_title() ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="page-wrapper">
      <div id="page">
        <header>
          <h1>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/heading.jpg" />
            <span class="no-display"><?php bloginfo('name'); ?></span>
          </h1>
          <?php wp_nav_menu(array('theme_location' => 'navigation-menu')); ?>
        </header>
