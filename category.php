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
			<div id="content" class='main-content'>
					<?php
					// The Loop
					if ( have_posts() ) : ?>

							<div class="archive-cat mb-2">
								<div class="sub-head d-flex justify-content-between">
									<h1 class="sub-title mb-3"><?php single_cat_title();?></h1>
								</div>
								<!-- .sub-head -->

								<div class="row archive-post-item">
									<?php while ( have_posts() ) : the_post(); ?>
										<div class="post-item col-24 col-md-12 col-lg-6 col-xl-4">
											<div class="card mb-2 mb-lg-3">
												<div class="card-body">
													<?php
													/**
													 * 是否直接跳转
													 */
													$goToLink = get_permalink(); // 文章链接
													$siteGo = get_field('site_go'); // 站点信息：跳转

													// 如果选择跳转
													if( $siteGo == 1 ){
														$goToLink = get_field('site_url');
													}?>
													<h5 class="card-title d-flex align-items-center"><img src="<?php echo get_field('site_logo')['url'];?>?x-oss-process=image/auto-orient,1/resize,m_fill,w_30,h_30/quality,Q_100" width="30" height="30" alt="<?php echo get_field('site_logo')['alt'];?>" class="rounded-circle"><?php the_title( '<span class="pl-2"><a href="' . esc_url( $goToLink ) . '" rel="bookmark">', '</span></a>' );?></h5>
													<p class="card-text text-muted text-truncate"><?php echo get_field('site_desc');?></p>
												</div>
												<!-- .card-body -->

											</div>
											<!-- .card -->

										</div>
										<!-- .post-item -->

									<?php endwhile; ?>

								</div>
								<!-- .row -->

								<div class="row">
									<div class="col-24 text-center pt-3">
										<?php wp_pagenavi(); ?>
									</div>
								</div>
								<!-- .row -->

							</div>
							<!-- .archive-cat -->

					<?php else : ?>
    				<p><?php _e( 'Sorry, no posts matched your criteria.', 'haoz1234' ); ?></p>
					<?php endif; ?>
			</div>
			<!-- #content -->

		</div>
		<!-- #primary -->

	</div>
	<!-- #main.wrapper -->

<?php get_footer();?>
