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
						<div class="post-head d-flex flex-wrap align-items-center pb-4 mb-4">
							<img src="<?php echo get_field('site_logo')['url'];?>?x-oss-process=image/auto-orient,1/resize,m_fill,w_100,h_100/quality,Q_100" width="100" height="100" alt="<?php echo get_field('site_logo')['alt'];?>" class="post-icon rounded-circle mb-2 mb-md-1 mb-lg-0">
							<div class="post-info pl-lg-4">
								<?php the_title( '<h1 class="post-title mb-3">', '</h1>' );?>
								<p class="mb-1 text-secondary"><?php echo get_field('site_desc');?></p>
								<p class="mb-1 text-secondary">官网：<a href="<?php echo get_field('site_url');?>" rel="nofollow noreferrer noopener" target="_blank"><?php echo get_field('site_url');?> <span class="fa-fw fas fa-external-link-alt"></span></a></p>
							</div>
						</div>
						<!-- .post-head -->

						<div class="post-content overflow-hidden mb-1 mb-lg-2">
							<?php the_content();?>
						</div>
						<!-- .post-content -->

						<?php
						/**
						 * 相关文章：
						 * 随机选择文章所属分类下的文章
						 */

						// 当前文章所属分类
						$categories = get_the_category();
						$current_cat =  $categories[0]->cat_ID;

						// 查询规则
						$args = array(
							// 分类目录
							'cat'             => $current_cat,
							// 查询数量
							'posts_per_page'  => 8,
							// 排除当前文章
							'post__not_in'    => array(  $post->ID ),
							// 文章类型
							'post_type'       => 'post',
							// 排序规则
							'orderby '        => 'rand'
						);

						// 主循环查询
						$the_query = new WP_Query( $args );

						// 查询结果文章数量
						$found_posts = $the_query -> found_posts;

						// 如果大于或等于1篇文章
						if( $found_posts >= 1) {?>
							<div class="post-related pt-1">
								<h3 class="post-related-title mb-3"><span class="pt-1 pb-1 pl-2 pr-2 bg-dark text-white d-inline-block"><?php esc_html_e('Related content:','haoz1234');?></span></h3>
								<div class="post-related-content">
									<ul class="row list-unstyled">
										<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
											<li class="col-24 col-md-8 col-lg-6 pt-lg-2 pb-lg-2">
												<p class="mb-2"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></p>
												<p class="mb-2 text-muted small d-none d-lg-block"><?php echo get_field('site_desc');?></p>
											</li>
										<?php endwhile;?>
									</ul>
								</div>
							</div>
							<!-- .post-related -->
							<?php wp_reset_postdata();?>
						<?php }?>

						<?php
						/**
						 * 最新文章
						 */
						// 查询规则
						$args = array(
							// 查询数量
							'posts_per_page'  => 8,
							// 排除当前文章
							'post__not_in'    => array(  $post->ID ),
							// 文章类型
							'post_type'       => 'post',
							// 排序规则
							'orderby '        => 'rand'
						);

						// 主循环查询
						$the_query = new WP_Query( $args );?>

						<div class="post-latest pt-1">
							<h3 class="post-latest-title mb-3"><span class="pt-1 pb-1 pl-2 pr-2 bg-dark text-white d-inline-block"><?php esc_html_e('Latest content:','haoz1234');?></span></h3>
							<div class="post-latest-content">
								<ul class="row list-unstyled">
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<li class="col-24 col-md-8 col-lg-6 pt-lg-2 pb-lg-2">
											<p class="mb-2"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></p>
											<p class="mb-2 text-muted small d-none d-lg-block"><?php echo get_field('site_desc');?></p>
										</li>
									<?php endwhile;?>
								</ul>
							</div>
						</div>
						<!-- .post-latest -->
						<?php wp_reset_postdata();?>

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
