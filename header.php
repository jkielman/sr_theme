<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package sr_theme
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
			<div id="site">
				<header class="site-hescssader" role="banner">
					<nav id="site-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>


					</nav><!-- #site-navigation -->

							<?php
							if ( is_front_page() && is_home() ) : ?>
							<a  class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php else : ?>
							<a  class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php
							endif;?>

				</header><!-- #masthead -->
							<div id="content" class="site-content">
							<div id="copy"></div>
