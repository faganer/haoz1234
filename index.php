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

/**
 * Codestar Framework
 */

// 循环展示分类ID
$home_cat =  explode(",",get_option('csf')['opt-home-1']);
// 每个分类默认展示条数
$cat_per = get_option('csf')['opt-home-6'];
?>

	<div id="main" class="wrapper container-fluid d-flex">

		<?php get_sidebar();?>

		<div id="primary" class="site-content w-100">
			<div id="content" class='main-content'>
					<?php
					foreach($home_cat as $cat) {

					// The Query
					$the_query = new WP_Query(
						array(
						'cat' => $cat,
						'posts_per_page' => $cat_per,
						'no_found_rows' => true,
						)
					);

					// The Loop
					if ( $the_query->have_posts() ) : ?>

							<div class="archive-cat archive-cat-<?php echo $cat;?> mb-2">
								<div class="sub-head d-flex justify-content-between">
									<h2 class="sub-title mb-3"><?php echo get_the_category_by_ID($cat);?></h2>
									<div class="sub-opt d-none d-lg-block"><a href="javascript:;" class="text-muted up d-none"><?php _e( 'Collapse', 'haoz1234' ); ?><span class="fa-fw fas fa-angle-up"></span></a><a href="javascript:;" class="text-muted down"><?php _e( 'Expand', 'haoz1234' ); ?><span class="fa-fw fas fa-angle-down"></span></a></div>
								</div>
								<!-- .sub-head -->

								<div class="row archive-post-item">
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
									<?php wp_reset_postdata(); ?>

								</div>
								<!-- .row -->

							</div>
							<!-- .archive-cat -->

					<?php else : ?>
    				<p><?php _e( 'Sorry, no posts matched your criteria.', 'haoz1234' ); ?></p>
					<?php endif; ?>
					<?php }?>
			</div>
			<!-- #content -->

		</div>
		<!-- #primary -->

	</div>
	<!-- #main.wrapper -->

<?php get_footer();?>
