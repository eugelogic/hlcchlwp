<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HLCCHL
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hlcchl' ); ?></a>

<!-- HEADER
================================================== -->
<header class="site-header" role="banner">

  <!-- TOP BAR
  ================================================== -->
  <section id="top-bar">
    <div class="container">
      Call Us on
      <a href="tel:02083429524">0208 342 9524</a>
      -
      Send Us an Email <a href="mailto:hollylodgelondon@hotmail.com">hollylodgelondon@hotmail.com</a>
    </div><!-- container -->
  </section>

  <!-- SITE TITLE
  ================================================== -->
  <section id="site-title">
    <div class="container">
      <h1><?php bloginfo('name'); ?></h1>
    </div><!-- container -->
  </section>

  <!-- MAIN NAV MENU
  ================================================== -->
  <nav>
    <div class="container">
			<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". -->
			<!-- In other words, it overwrites the "container_class". -->
			<!-- Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
			<?php
				wp_nav_menu( array(

					'theme_location'	=> 'primary',
					'container'				=> 'nav'

				) );
			?>
    </div><!-- container -->
  </nav>

</header>
