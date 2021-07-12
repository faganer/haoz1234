<?php
/**
 * haoz1234 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package haoz1234
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'haoz1234_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function haoz1234_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on haoz1234, use a find and replace
		 * to change 'haoz1234' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'haoz1234', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'haoz1234' ),
				'sidebar' => esc_html__( 'Sidebar', 'haoz1234' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// // Set up the WordPress core custom background feature.
		// add_theme_support(
		// 	'custom-background',
		// 	apply_filters(
		// 		'haoz1234_custom_background_args',
		// 		array(
		// 			'default-color' => 'ffffff',
		// 			'default-image' => '',
		// 		)
		// 	)
		// );

		// Add theme support for selective refresh for widgets.
		// add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// add_theme_support(
		// 	'custom-logo',
		// 	array(
		// 		'height'      => 250,
		// 		'width'       => 250,
		// 		'flex-width'  => true,
		// 		'flex-height' => true,
		// 	)
		// );
	}
endif;
add_action( 'after_setup_theme', 'haoz1234_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function haoz1234_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'haoz1234_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'haoz1234_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function haoz1234_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'haoz1234' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'haoz1234' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'haoz1234_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function haoz1234_scripts() {
	wp_enqueue_style( 'fortawesome-style', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.0/css/fontawesome.min.css', array(), '5.12.0' );
	wp_enqueue_style( 'fortawesome-style-brands', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.0/css/brands.min.css', array(), '5.12.0' );
	wp_enqueue_style( 'fortawesome-style-solid', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.12.0/css/solid.min.css', array(), '5.12.0' );
	wp_enqueue_style( 'haoz1234-style', get_template_directory_uri().'/dist/css/style.min.css', array(), _S_VERSION );

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js', array(), '3.4.1', true);
	wp_enqueue_script('jquery');

	// wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'),'1.16.1', true);

	wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'),'4.6.0', true);

	wp_enqueue_script('smooth-scroll', 'https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js', array('jquery'),'16.1.3', true);

	wp_enqueue_script('haoz1234-script', get_template_directory_uri().'/dist/js/bundled.min.js', array('jquery'),_S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'haoz1234_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

