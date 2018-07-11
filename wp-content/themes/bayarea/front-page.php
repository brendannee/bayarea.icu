<?php
/**
 * The template for displaying the front page
 */

get_header();
?>
	<div class="masthead masthead-home">
		<?php get_template_part( 'template-parts/menu' ); ?>
		<header class="entry-header">
			<h1 class="entry-title display-1"><?php echo bloginfo('name'); ?></h1>
		</header><!-- .entry-header -->
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
				<div class="entry-content">
					<?php the_content();?>
					<div class="row">
						<?php
						$the_query = new WP_Query( array('post_type' => 'place') );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<!-- 760 x 500 -->
								<div class="col-md-4 col-xs-12">
									<a class="place-block" href="<?php the_permalink(); ?>" style="background-image: linear-gradient(-180deg, rgba(0,0,0, 0) 53%, #000 100%), url(<?php echo get_the_post_thumbnail_url($post, 'block'); ?>)">
										<div class="place-block-title"><?php the_title(); ?></div>
									</a>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->
		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
