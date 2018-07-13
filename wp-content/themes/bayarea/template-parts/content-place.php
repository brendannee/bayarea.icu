<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bayarea
 */

?>
<div class="masthead masthead-<?php the_field('featured_image_color'); ?>">

	<div class="masthead-image" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'poster'); ?>)"></div>
	<?php get_template_part( 'template-parts/menu' ); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title display-1">', '</h1>' ); ?>
	</header><!-- .entry-header -->
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bayarea' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bayarea' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bayarea_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
