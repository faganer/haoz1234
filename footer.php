<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package haoz1234
 */

?>

	<footer id="colophon" class="site-footer mt-3 pt-3 pb-3 pl-1 pr-1 bg-dark text-light overflow-hidden">
		<div class="site-info text-center">
			<?php
			/**
			 * 友情链接
			 */
			if(!empty(get_option('csf')['opt-data-1'])){
				echo '<div class="footer-links d-inline-flex">';
				$args = array(
					'orderby'          => 'link_id',
					'category'         => get_option('csf')['opt-data-1'],
					'categorize'       => 0,
					'title_li'         => __( 'Links','haoz1234' ),
					'title_before'     => '<span class="position-relative mr-3">',
					'title_after'      => '</span>',
					'category_before'  => '',
					'category_after'   => '',
				);
				wp_list_bookmarks( $args );
				echo '</div>';
			}?>
			<p>&copy <?php echo date('Y');?> <?php bloginfo('name');?>(<?php echo $_SERVER['HTTP_HOST'];?>)，程序：WordPress，主题：<a href="https://wpmore.cn/" rel="nofollow noreferrer noopener" target="_blank" class="text-light">WPmore</a>，服务器：<a href="https://cn.aliyun.com/minisite/goods?userCode=zj48tyhb" rel="nofollow noreferrer noopener" target="_blank" class="text-light">阿里云</a>.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<ul class="float list-unstyled position-fixed d-flex flex-column text-center">
	<!-- <li class="float-item float-item-cat bg-info"><a href="javascript:;" class="text-white" title="分类目录"><span class="fa-fw fas fa-bars"></span></a></li> -->
	<li class="float-item float-item-top shadow-sm"><a href="#" class="btn btn-primary" title="返回顶部"><span class="fa-fw fas fa-arrow-up"></span></a></li>
</ul>
<!-- .float -->

<div id="binancezhModal" class="modal fade" tabindex="-1" aria-labelledby="binancezhModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="binancezhModalLabel">超级返现</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<p>币安 - 全球最大的区块链资产交易平台</p>
	  	<p>推荐ID：<span class="text-danger">NKJ1QTQS</span></p>
		<p>您享受的返现比例： <span class="text-danger">5%</span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">立即注册</button>
      </div>
    </div>
  </div>
</div>
<!-- #binancezhModal -->

<?php wp_footer(); ?>

</body>
</html>
