<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package haoz1234
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-light'); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header mb-3">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<?php if ( is_front_page() && is_home() ){?>
					<h1 class="site-title m-0"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"" rel="home" title="<?php bloginfo('description');?>"><?php bloginfo('name');?></a></h1>
				<?php } else {?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('description');?>"><?php bloginfo('name');?></a>
				<?php }?>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse justify-content-end" id="navbarColor01">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav mr-auto',
						)
					);?>
					<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline ml-lg-5">
						<input type="search" required name="s" id="s" class="form-control mr-sm-2" type="search" aria-label="Search">
						<button class="btn btn-outline-info my-2 my-sm-0" type="submit">搜索</button>
					</form>
				</div>
			</nav>
			<!-- .navbar -->

		</header>
		<!-- #masthead -->
