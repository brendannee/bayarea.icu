<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bayarea
 */

get_header();
?>

	<div class="masthead masthead-home">
		<?php get_template_part( 'template-parts/menu' ); ?>
		<header class="entry-header">
			<h1 class="entry-title display-1">I see you, <?php the_archive_title(); ?></h1>
		</header><!-- .entry-header -->
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<div class="row">

					<?php if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							?>
							<div class="col-md-4 col-xs-12">
								<a class="place-block" href="<?php the_permalink(); ?>" style="background-image: linear-gradient(-180deg, rgba(0,0,0, 0) 53%, #000 100%), url(<?php echo get_the_post_thumbnail_url($post, 'block'); ?>)">
									<div class="place-block-title"><?php the_title(); ?></div>
								</a>
							</div>

						<?php endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
