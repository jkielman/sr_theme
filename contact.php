<?php
/*
Template Name: Contact
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
			<header class="site-header" role="banner">
				<nav id="site-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<?php
					if ( is_front_page() && is_home() ) : ?>
					<a  class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php else : ?>
					<a   class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php
					endif;?>
				</header>
				<div id="content" class="site-content">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'contact' );
						endwhile;
						?>
						</main>
					</div>
					<?php
					get_footer();
