<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package haoz1234
 */
?>

<div id="secondary" class="widget-area bg-white">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'sidebar',
			'menu_id'        => 'sidebar-menu',
			'menu_class'     => 'nav flex-column',
		)
	);?>
</div>
<!-- #secondary -->
