<?php
/**
* Template part for displaying page content in page.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package sr_theme
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<div class="entry-content col__2">
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sr_theme' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<div class="entry-content col__1">

	<?php print_custom_field('contentboxfooter:do_shortcode'); ?>

	</div>


</article><!-- #post-## -->
</div>
</div>
