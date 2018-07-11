<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bayarea
 */

get_header();
?>

	<div class="masthead masthead-home">
		<?php get_template_part( 'template-parts/menu' ); ?>
		<header class="entry-header">
			<h1 class="entry-title display-1">Not Found</h1>
		</header><!-- .entry-header -->
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found container">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bayarea' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bayarea' ); ?></p>

					<?php
					get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
