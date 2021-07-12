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
				<div class="row">
					<div class="col-24 pt-3">
						<ul class="list-group list-group-flush">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<li id="post-<?php the_ID(); ?>" <?php post_class('list-group-item'); ?>>
										<?php
										/**
										 * 搜索高亮
										 * https://www.22vd.com/41930.html
										 */
										$s = trim(get_search_query()) ? trim(get_search_query()) : 0;
										$title = get_the_title();
										$content = get_the_content();
										$content = wp_strip_all_tags(str_replace(array('[', ']'), array('<', '>'), $content));
										$content = mb_strimwidth(strip_tags($content), 0, 240, '...');
										if($s){$keys = explode(" ",$s);
											$title = preg_replace('/('.implode('|', $keys) .')/iu','<span class="text-danger">\0</span>',$title);
											$content = preg_replace('/('.implode('|', $keys) .')/iu','<span class="text-danger">\0</span>',$content);
										}
										?>
										<p class="font-weight-bold"><a href="<?php get_permalink();?>" rel="bookmark"><?php echo $title;?></a></p>
										<p class="text-muted"><?php echo $content;?></p>
									</li>
									<!-- #post -->
							<?php endwhile; else : ?>
									<li class="list-group-item"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'haoz1234' ); ?></p></li>
							<!-- REALLY stop The Loop. -->
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<!-- .row -->
				<div class="row">
					<div class="col-24 text-center pt-3">
						<?php wp_pagenavi(); ?>
					</div>
				</div>
				<!-- .row -->

			</div>
			<!-- #content -->

		</div>
		<!-- #primary -->

	</div>
	<!-- #main.wrapper -->

<?php get_footer();?>
