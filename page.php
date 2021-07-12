<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package haoz1234
 */

get_header();

?>

	<div id="main" class="wrapper container-fluid d-flex">
		<?php get_sidebar();?>

		<div id="primary" class="site-content w-100">
			<?php
			/**
			 * How to implement Yoast SEO breadcrumbs
			 * https://yoast.com/help/implement-wordpress-seo-breadcrumbs/
			 */
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
			<div id="content" class='main-content'>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
						<div class="post-head text-center pb-4 mb-4">
							<?php the_title( '<h1 class="post-title mb-3">', '</h1>' );?>
						</div>
						<!-- .post-head -->

						<div class="post-content">
							<?php the_content();?>
						</div>
						<!-- .post-content -->

					</article>
					<!-- #post -->
				<?php endwhile; else : ?>

					<!-- The very first "if" tested to see if there were any Posts to -->
					<!-- display.  This "else" part tells what do if there weren't any. -->
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'haoz1234' ); ?></p>

				<!-- REALLY stop The Loop. -->
				<?php endif; ?>

			</div>
			<!-- #content -->

		</div>
		<!-- #primary -->

	</div>
	<!-- #main.wrapper -->

<?php get_footer();?>
