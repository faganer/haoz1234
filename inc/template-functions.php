<?php
/**
 * WP-PageNavi
 * CHANGING CLASS NAMES
 * https://wordpress.org/plugins/wp-pagenavi/
 */
// Simple Usage - 1 callback per filter
add_filter('wp_pagenavi_class_pages', 'theme_pagination_pages_class');
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_previouspostslink_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_nextpostslink_class');
add_filter('wp_pagenavi_class_current', 'theme_pagination_current_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_page_class');

function theme_pagination_pages_class($class_name) {
	return 'page-link disabled';
  }

function theme_pagination_previouspostslink_class($class_name) {
  return 'page-link';
}

function theme_pagination_current_class($class_name) {
  return 'page-link current';
}

function theme_pagination_nextpostslink_class($class_name) {
	return 'page-link';
  }

function theme_pagination_page_class($class_name) {
  return 'page-link';
}

/**
 * Control core classes for avoid errors
 */
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'csf';

	//
	// Create options
	CSF::createOptions( $prefix, array(
			'menu_title' => '主题',
			'menu_slug'  => 'csf',
	) );

	//
	// Create a section
	CSF::createSection( $prefix, array(
			'title'  => '基本设置',
			'fields' => array(

					//
					// A text field
					array(
							'id'    => 'opt-text',
							'type'  => 'text',
							'title' => 'Simple Text',
					),

			)
	) );

	CSF::createSection( $prefix, array(
			'title'  => '功能优化',
			'fields' => array(
				array(
					'id'      => 'opt-func-14',
					'type'    => 'switcher',
					'title'   => 'Feed',
					'default' => true
				),
				array(
					'id'      => 'opt-func-3',
					'type'    => 'switcher',
					'title'   => 'Emoji',
					'default' => false
				),
				array(
					'id'      => 'opt-func-6',
					'type'    => 'switcher',
					'title'   => 'Embed',
					'default' => false
				),
				array(
					'id'      => 'opt-func-11',
					'type'    => 'switcher',
					'title'   => 'XML-RPC',
					'default' => false
				),
				array(
					'id'      => 'opt-func-13',
					'type'    => 'switcher',
					'title'   => 'REST API',
					'default' => true
				),
				array(
					'id'      => 'opt-func-9',
					'type'    => 'switcher',
					'title'   => 'Admin Bar',
					'default' => false
				),
				array(
					'id'      => 'opt-func-12',
					'type'    => 'switcher',
					'title'   => 'Trackbacks',
					'default' => false
				),
				array(
					'id'      => 'opt-func-33',
					'type'    => 'switcher',
					'title'   => 'wlwmanifest',
					'default' => false
				),
				array(
					'id'      => 'opt-func-7',
					'type'    => 'switcher',
					'title'   => 'Auto Embeds',
					'default' => false
				),
				array(
					'id'      => 'opt-func-34',
					'type'    => 'switcher',
					'title'   => 'CDN Gravatar',
					'default' => true
				),
				array(
					'id'      => 'opt-func-19',
					'type'    => 'switcher',
					'title'   => '链接管理',
					'default' => true
				),
				array(
					'id'      => 'opt-func-26',
					'type'    => 'switcher',
					'title'   => '转译字符',
					'default' => false
				),
				array(
					'id'      => 'opt-func-27',
					'type'    => 'switcher',
					'title'   => '日志修订',
					'default' => false
				),
				array(
					'id'      => 'opt-func-2',
					'type'    => 'switcher',
					'title'   => '输出版本号',
					'default' => false
				),
				array(
					'id'      => 'opt-func-4',
					'type'    => 'switcher',
					'title'   => '古滕堡编辑器',
					'default' => false
				),
				array(
					'id'      => 'opt-func-28',
					'type'    => 'switcher',
					'title'   => '图像大小属性',
					'default' => false
				),
				array(
					'id'      => 'opt-func-8',
					'type'    => 'switcher',
					'title'   => '前台加载语言包',
					'default' => true
				),
				array(
					'id'      => 'opt-func-10',
					'type'    => 'switcher',
					'title'   => '管理员邮箱验证',
					'default' => false
				),
				array(
					'id'      => 'opt-func-16',
					'type'    => 'switcher',
					'title'   => '插件自动更新',
					'default' => true
				),
				array(
					'id'      => 'opt-func-17',
					'type'    => 'switcher',
					'title'   => '主题自动更新',
					'default' => true
				),
				array(
					'id'      => 'opt-func-15',
					'type'    => 'switcher',
					'title'   => '核心文件自动更新',
					'default' => true
				),
				array(
					'id'      => 'opt-func-22',
					'type'    => 'switcher',
					'title'   => '仪表盘页脚信息',
					'default' => false
				),
				array(
					'id'      => 'opt-func-24',
					'type'    => 'switcher',
					'title'   => '仪表盘右上角帮助',
					'default' => false
				),
				array(
					'id'      => 'opt-func-1',
					'type'    => 'switcher',
					'title'   => '仪表盘左上角Logo',
					'default' => false
				),
				array(
					'id'      => 'opt-func-18',
					'type'    => 'switcher',
					'title'   => '仪表盘隐私相关页面',
					'default' => false
				),
				array(
					'id'      => 'opt-func-5',
					'type'    => 'switcher',
					'title'   => '仪表盘CSS、JS打包加载',
					'default' => false
				),
				array(
					'id'      => 'opt-func-20',
					'type'    => 'switcher',
					'title'   => '管理界面配色方案',
					'default' => false
				),
				array(
					'id'      => 'opt-func-23',
					'type'    => 'switcher',
					'title'   => '图片响应式资源请求',
					'default' => false
				),
				array(
					'id'      => 'opt-func-21',
					'type'    => 'switcher',
					'title'   => '附件重命名防止乱码',
					'default' => true
				),
				array(
					'id'      => 'opt-func-29',
					'type'    => 'switcher',
					'title'   => '插入图片使用完整尺寸',
					'default' => true
				),
				array(
					'id'      => 'opt-func-30',
					'type'    => 'switcher',
					'title'   => '登录页面返回站点信息',
					'default' => true
				),
				array(
					'id'      => 'opt-func-25',
					'type'    => 'switcher',
					'title'   => '全高度编辑器和免打扰功能',
					'default' => false
				),
				array(
					'id'      => 'opt-func-31',
					'type'    => 'switcher',
					'title'   => '去除utf8mb4不支持的非法字符',
					'default' => true
				),
				array(
					'id'      => 'opt-func-32',
					'type'    => 'switcher',
					'title'   => 'Memcached缓存后台媒体库加载',
					'default' => true
				)
			)
	) );

	CSF::createSection( $prefix, array(
		'title'  => '站长工具',
		'fields' => array(
			array(
					'id'    => 'opt-tool-1',
					'type'  => 'text',
					'title' => '百度验证码',
			),
			array(
				'id'    => 'opt-tool-2',
				'type'  => 'text',
				'title' => 'Bing 验证码',
			),
			array(
				'id'    => 'opt-tool-3',
				'type'  => 'text',
				'title' => 'Google 验证码',
			),
			array(
				'id'    => 'opt-tool-4',
				'type'  => 'text',
				'title' => 'Yandex 验证码',
			),
			array(
				'id'    => 'opt-tool-5',
				'type'  => 'text',
				'title' => '360 验证码',
			),
			array(
				'id'    => 'opt-tool-6',
				'type'  => 'text',
				'title' => '搜狗验证码',
			),
			array(
				'id'    => 'opt-tool-7',
				'type'  => 'text',
				'title' => '头条验证码',
			),
			array(
				'id'    => 'opt-tool-8',
				'type'  => 'text',
				'title' => '神马验证码',
			),
			array(
				'id'    => 'opt-tool-9',
				'type'  => 'switcher',
				'title' => '百度自动推送',
			),
			array(
				'id'    => 'opt-tool-10',
				'type'  => 'text',
				'title' => '百度普通收录API提交',
				'placeholder' => '填写准入密钥'
			),
			array(
				'id'    => 'opt-tool-11',
				'type'  => 'text',
				'title' => '360 自动收录'
			),
			array(
				'id'    => 'opt-tool-12',
				'type'  => 'text',
				'title' => '百度统计'
			),
		)
	) );

	CSF::createSection( $prefix, array(
		'title'  => '数据调用',
		'fields' => array(
			array(
				'id'      => 'opt-home-1',
				'type'    => 'text',
				'title'   => '循环展示分类ID',
			),
			array(
				'id'      => 'opt-home-6',
				'type'    => 'number',
				'title'   => '每个分类默认展示条数',
				'default' => 6
			),
			array(
				'id'      => 'opt-data-1',
				'type'    => 'text',
				'title'   => '链接分类',
				'placeholder'    => '底部友情链接分类ID'
			),
			array(
				'id'      => 'opt-home-4',
				'type'    => 'wp_editor',
				'title'   => '第一栏内容'
			),
			array(
				'id'      => 'opt-home-5',
				'type'    => 'text',
				'title'   => '更多文章链接',
				'placeholder' => 'https:// 或者 http://'
			),
		)
	) );

	CSF::createSection( $prefix, array(
		'title'  => '其他设置',
		'fields' => array(
			array(
				'id'    => 'opt-other-1',
				'type'   => 'code_editor',
				'title'  => '顶部代码',
				'sanitize' => false,
			),
			array(
				'id'    => 'opt-other-2',
				'type'   => 'code_editor',
				'title'  => '底部代码',
				'sanitize' => false,
			),
		)
) );

	CSF::createSection( $prefix, array(
		'title'  => '数据备份',
		'fields' => array(
			array(
					'type'  => 'backup',
					'title' => '数据备份',
			),
		)
	) );

}

/**
 * WordPress移除后台左上角 WordPress Logo
 * https://wpmore.cn/wordpress-removes-the-top-left-corner-of-the-background-wordpress-logo.html
 */
if(get_option('csf')['opt-func-1'] === '0' || empty(get_option('csf')['opt-func-1'])){
	function annointed_admin_bar_remove() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
	}
	add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
}

/**
 * 移除WordPress版本号
 * https://wpmore.cn/remove-wp_generator.html
 */
if(get_option('csf')['opt-func-2'] === '0' || empty(get_option('csf')['opt-func-2'])){
	remove_action('wp_head', 'wp_generator');
}

/**
 * WordPress 禁用 Emoji 功能
 * https://wpmore.cn/wordpress-%e7%a6%81%e7%94%a8-emoji-%e5%8a%9f%e8%83%bd.html
 */
if(get_option('csf')['opt-func-3'] === '0' || empty(get_option('csf')['opt-func-3'])){
	remove_action('admin_print_scripts',    'print_emoji_detection_script');
	remove_action('admin_print_styles',    'print_emoji_styles');

	remove_action('wp_head',        'print_emoji_detection_script',    7);
	remove_action('wp_print_styles',    'print_emoji_styles');

	remove_action('embed_head',        'print_emoji_detection_script');

	remove_filter('the_content_feed',    'wp_staticize_emoji');
	remove_filter('comment_text_rss',    'wp_staticize_emoji');
	remove_filter('wp_mail',        'wp_staticize_emoji_for_email');

	add_filter( 'emoji_svg_url',        '__return_false' );
}

/**
 * WordPress 5.0禁用古滕堡编辑器的方法
 * https://wpmore.cn/wordpress-disable-gutenberg.html
 */
if(get_option('csf')['opt-func-4'] === '0' || empty(get_option('csf')['opt-func-4'])){
	remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');
	remove_action('admin_enqueue_scripts', 'wp_common_block_scripts_and_styles');
	remove_filter('the_content', 'do_blocks', 9);
	add_filter('use_block_editor_for_post_type', '__return_false');
	wp_deregister_style('wp-block-library');
}

/**
 * WordPress后台加载慢？load-scripts.php、load-styles.php不合并JS、CSS
 * https://wpmore.cn/wordpress%e5%90%8e%e5%8f%b0%e5%8a%a0%e8%bd%bd%e6%85%a2%ef%bc%9fload-scripts-php%e3%80%81load-styles-php%e4%b8%8d%e5%90%88%e5%b9%b6js%e3%80%81css.html
 */
if(get_option('csf')['opt-func-5'] === '0' || empty(get_option('csf')['opt-func-5'])){
	define('CONCATENATE_SCRIPTS', false);
}

/**
 * WordPress禁止Embed引入文章
 * https://wpmore.cn/disable-embed.html
 */
if(get_option('csf')['opt-func-6'] === '0' || empty(get_option('csf')['opt-func-6'])){
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

	add_filter( 'embed_oembed_discover', '__return_false' );

	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_filter( 'oembed_response_data',   'get_oembed_response_data_rich',  10, 4 );

	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );

	add_filter('tiny_mce_plugins', function ($plugins){
		return array_diff( $plugins, ['wpembed'] );
	});
}

/**
 * 如何禁用WordPress Auto Embeds (oEmbed)
 * https://wpmore.cn/disabled-auto-embeds.html
 */
if(get_option('csf')['opt-func-7'] === '0' || empty(get_option('csf')['opt-func-7'])){
	remove_filter('the_content',			[$GLOBALS['wp_embed'], 'run_shortcode'], 8);
	remove_filter('widget_text_content',	[$GLOBALS['wp_embed'], 'run_shortcode'], 8);

	remove_filter('the_content',			[$GLOBALS['wp_embed'], 'autoembed'], 8);
	remove_filter('widget_text_content',	[$GLOBALS['wp_embed'], 'autoembed'], 8);

	remove_action('edit_form_advanced',		[$GLOBALS['wp_embed'], 'maybe_run_ajax_cache']);
	remove_action('edit_page_form',			[$GLOBALS['wp_embed'], 'maybe_run_ajax_cache']);
}

/**
 * 使用CDN加速Gravatar头像（免费）
 * https://wpmore.cn/%e4%bd%bf%e7%94%a8cdn%e5%8a%a0%e9%80%9fgravatar%e5%a4%b4%e5%83%8f%ef%bc%88%e5%85%8d%e8%b4%b9%ef%bc%89.html
 */
if(isset(get_option('csf')['opt-func-34']) && get_option('csf')['opt-func-34'] === '1'){
	function cdn_gravatar($avatar) {
		// Replacement for HTTPS domain
		$avatar = str_replace(array("//gravatar.com/", "//secure.gravatar.com/","//cn.gravatar.com/","//www.gravatar.com/", "//0.gravatar.com/", "//1.gravatar.com", "//2.gravatar.com/"), "//gravatar.loli.net/", $avatar);
		// Replacement for HTTPS protocol
		$avatar = str_replace("http:", "https:", $avatar);
		return $avatar;
	}

	add_filter('get_avatar', 'cdn_gravatar');
}

/**
 * WordPress主题开发能不加载语言包就不要吧
 * https://wpmore.cn/wordpress-try-not-to-use-load_-theme_-textdomain.html
 */
if(get_option('csf')['opt-func-8'] === '0' || empty(get_option('csf')['opt-func-8'])){
	add_filter('locale', function($locale) {
    $locale = ( is_admin() ) ? $locale : 'en_US';
    return $locale;
	});
}

/**
 * 移除 WordPress 的 Admin Bar
 * https://wpmore.cn/remove-admin_bar.html
 */
if(get_option('csf')['opt-func-9'] === '0' || empty(get_option('csf')['opt-func-9'])){
	add_filter( 'show_admin_bar', '__return_false' );
}

/**
 * 屏蔽站点管理员邮箱验证功能
 * https://wpmore.cn/disabled-admin_email_check_interval.html
 */
if(get_option('csf')['opt-func-10'] === '0' || empty(get_option('csf')['opt-func-10'])){
	add_filter('admin_email_check_interval', '__return_false');
}

/**
 * WordPress禁用XML-RPC功能
 * https://wpmore.cn/disable-wordpress-xml-rpc-functionality.html
 */
if(get_option('csf')['opt-func-11'] === '0' || empty(get_option('csf')['opt-func-11'])){
	add_filter('xmlrpc_enabled', '__return_false');
}

/**
 * 屏蔽Trackbacks
 */
if(get_option('csf')['opt-func-12'] === '0' || empty(get_option('csf')['opt-func-12'])){
	if(get_option('csf')['opt-func-11'] === '0' || empty(get_option('csf')['opt-func-11'])){
			//彻底关闭 pingback
			add_filter('xmlrpc_methods',function($methods){
				return array_merge($methods, [
					'pingback.ping'						=> '__return_false',
					'pingback.extensions.getPingbacks'	=> '__return_false'
				]);
			});
	}

	//禁用 pingbacks, enclosures, trackbacks
	remove_action( 'do_pings', 'do_all_pings', 10 );

	//去掉 _encloseme 和 do_ping 操作。
	remove_action( 'publish_post','_publish_post_hook',5 );
}

/**
 * 屏蔽WordPress REST API
 * https://wpmore.cn/disable-rest-api.html
 */
if(get_option('csf')['opt-func-13'] === '0' || empty(get_option('csf')['opt-func-13'])){
	remove_action('init',			'rest_api_init' );
	remove_action('rest_api_init',	'rest_api_default_filters', 10 );
	remove_action('parse_request',	'rest_api_loaded' );

	add_filter('rest_enabled',		'__return_false');
	// add_filter('rest_jsonp_enabled','__return_false');

	// 移除头部 wp-json 标签和 HTTP header 中的 link
	remove_action('wp_head',			'rest_output_link_wp_head', 10 );
	remove_action('template_redirect',	'rest_output_link_header', 11);

	remove_action('xmlrpc_rsd_apis',	'rest_output_rsd');

	remove_action('auth_cookie_malformed',		'rest_cookie_collect_status');
	remove_action('auth_cookie_expired',		'rest_cookie_collect_status');
	remove_action('auth_cookie_bad_username',	'rest_cookie_collect_status');
	remove_action('auth_cookie_bad_hash',		'rest_cookie_collect_status');
	remove_action('auth_cookie_valid',			'rest_cookie_collect_status');
	remove_filter('rest_authentication_errors',	'rest_cookie_check_errors', 100 );
}

/**
 * WordPress禁用RSS Feed
 * https://wpmore.cn/disable-rss-feed.html
 */
if(get_option('csf')['opt-func-14'] === '0' || empty(get_option('csf')['opt-func-14'])){
	// 删除 wp_head 输入到模板中的feed地址链接
	add_action( 'wp_head', 'wpse33072_wp_head', 1 );
	function wpse33072_wp_head() {
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3 );
	}

	foreach( array( 'rdf', 'rss', 'rss2', 'atom' ) as $feed ) {
		add_action( 'do_feed_' . $feed, 'wpse33072_remove_feeds', 1 );
	}
	unset( $feed );

	// 当执行 do_feed action 时重定向到首页
	function wpse33072_remove_feeds() {
		wp_redirect( home_url(), 302 );
		exit();
	}

	// 删除feed的重定向规则
	add_action( 'init', 'wpse33072_kill_feed_endpoint', 99 );

	function wpse33072_kill_feed_endpoint() {
		global $wp_rewrite;
		$wp_rewrite->feeds = array();

		// 运行一次后，记得删除下面的代码
		flush_rewrite_rules();
	}
}

/**
 * 怎么禁止WordPress自动更新版本？
 * https://wpmore.cn/how-to-disable-automatic-updates-in-wordpress.html
 */
if(get_option('csf')['opt-func-15'] === '0' || empty(get_option('csf')['opt-func-15'])){
	// 禁止更新核心文件自动更新
	define( 'WP_AUTO_UPDATE_CORE', false );
}
if(get_option('csf')['opt-func-16'] === '0' || empty(get_option('csf')['opt-func-16'])){
	// 禁止插件自动更新
	add_filter( 'auto_update_plugin', '__return_false' );
}
if(get_option('csf')['opt-func-17'] === '0' || empty(get_option('csf')['opt-func-17'])){
	// 禁止主题自动更新
	add_filter( 'auto_update_theme', '__return_false' );
}


/**
 * WordPress移除后台隐私相关的页面
 * https://wpmore.cn/wordpress-remove-gdpr-pages.html
 */
if(get_option('csf')['opt-func-18'] === '0' || empty(get_option('csf')['opt-func-18'])){
	add_action('admin_menu', function (){
		global $menu, $submenu;

		// 移除设置菜单下的隐私子菜单。
		unset($submenu['options-general.php'][45]);

		// 移除工具彩带下的相关页面
		remove_action( 'admin_menu', '_wp_privacy_hook_requests_page' );

		remove_filter( 'wp_privacy_personal_data_erasure_page', 'wp_privacy_process_personal_data_erasure_page', 10, 5 );
		remove_filter( 'wp_privacy_personal_data_export_page', 'wp_privacy_process_personal_data_export_page', 10, 7 );
		remove_filter( 'wp_privacy_personal_data_export_file', 'wp_privacy_generate_personal_data_export_file', 10 );
		remove_filter( 'wp_privacy_personal_data_erased', '_wp_privacy_send_erasure_fulfillment_notification', 10 );

		// Privacy policy text changes check.
		remove_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'text_change_check' ), 100 );

		// Show a "postbox" with the text suggestions for a privacy policy.
		remove_action( 'edit_form_after_title', array( 'WP_Privacy_Policy_Content', 'notice' ) );

		// Add the suggested policy text from WordPress.
		remove_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'add_suggested_content' ), 1 );

		// Update the cached policy info when the policy page is updated.
		remove_action( 'post_updated', array( 'WP_Privacy_Policy_Content', '_policy_page_updated' ) );
	},9);
}

/**
 * 不用插件启用WordPress自带友情链接功能
 * https://wpmore.cn/link_manager_enabled.htmll
 */
if(get_option('csf')['opt-func-19'] === '1'){
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );
}

/**
 * 移除WordPress管理界面配色方案
 * https://wpmore.cn/remove-admin_color_scheme_picker.html
 */
if(!isset(get_option('csf')['opt-func-20']) || get_option('csf')['opt-func-20'] === '0' || empty(get_option('csf')['opt-func-20'])){
	remove_action("admin_color_scheme_picker", "admin_color_scheme_picker");
}

/**
 * 利用MD5 16位 + 时间戳，防止WordPress附件乱码
 * https://wpmore.cn/md5-16-strtotime-wordpress-filename.html
 */
if(isset(get_option('csf')['opt-func-21']) || get_option('csf')['opt-func-21'] === '1'){
	function make_filename($filename) {
		$info = pathinfo($filename);
		$ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
		$name = basename($filename, $ext);
		$strtotime = strtotime(date('Y-m-d H:i:s'));
		return $strtotime.$ext;
	}
	add_filter('sanitize_file_name', 'make_filename', 10);
}

/**
 * WordPress后台移除页脚信息
 * https://wpmore.cn/wordpress-remove-admin_footer.html
 */
if(!isset(get_option('csf')['opt-func-22']) || get_option('csf')['opt-func-22'] === '0' || empty(get_option('csf')['opt-func-22'])){
	function change_footer_admin()
	{
		return '';
	}
	add_filter('admin_footer_text', 'change_footer_admin', 9999);
	function change_footer_version()
	{
		return '';
	}
	add_filter('update_footer', 'change_footer_version', 9999);
}

/**
 * 禁用WordPress图片响应式资源请求
 * https://wpmore.cn/disable-srcset.html
 */
if(!isset(get_option('csf')['opt-func-23']) || get_option('csf')['opt-func-23'] === '0' || empty(get_option('csf')['opt-func-23'])){
	function disable_srcset( $sources ) {
		return false;
	}
	add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );
}

/**
 * 移除WordPress后台右上角帮助
 * https://wpmore.cn/remove-wordpress-help-tabs.html
 */
if(!isset(get_option('csf')['opt-func-24']) || get_option('csf')['opt-func-24'] === '0' || empty(get_option('csf')['opt-func-24'])){
	add_action('in_admin_header', function(){
		global $current_screen;
		$current_screen->remove_help_tabs();
	});
}

/**
 * WordPress彻底关闭全高度编辑器和免打扰功能
 * https://wpmore.cn/disable-full-height-editor-and-distraction-free-functionality.html
 */
if(!isset(get_option('csf')['opt-func-25']) || get_option('csf')['opt-func-25'] === '0' || empty(get_option('csf')['opt-func-25'])){
	add_action('admin_init', function(){
		wp_deregister_script('editor-expand');
	});

	add_filter('tiny_mce_before_init', function($init){
		unset($init['wp_autoresize_on']);
		return $init;
	});
}

/**
 * 如何禁用WordPress转译字符？
 * https://wpmore.cn/disable-wptexturize.html
 */
if(!isset(get_option('csf')['opt-func-26']) || get_option('csf')['opt-func-26'] === '0' || empty(get_option('csf')['opt-func-26'])){
	remove_filter('the_content', 'wptexturize');
	remove_filter('the_excerpt', 'wptexturize');
	remove_filter('comment_text', 'wptexturize');
}

/**
 * 如何禁用WordPress日志修订功能
 * https://wpmore.cn/disabled-wp_revisions_to_keep.html
 */
if(!isset(get_option('csf')['opt-func-27']) || get_option('csf')['opt-func-27'] === '0' || empty(get_option('csf')['opt-func-27'])){
	define('WP_POST_REVISIONS', false);
	add_filter( 'wp_revisions_to_keep', 'specs_wp_revisions_to_keep', 10, 2 );
	function specs_wp_revisions_to_keep( $num, $post ) {
			return 0;
	}
}

/**
 * 如何让WordPress文章中的图像大小属性失效或将其删除
 * https://wpmore.cn/image-in-wordpress-article-width-height-invalid-or-deleted.html
 */
if(!isset(get_option('csf')['opt-func-28']) || get_option('csf')['opt-func-28'] === '0' || empty(get_option('csf')['opt-func-28'] )){
	// 移除图片高度和宽度属性从文章内容中的图片上
	function salong_remove_image_size_attributes( $html ) {
		return preg_replace( '/(width|height)="\d*"/', '', $html );
	}
	// 从特色图像中删除图片大小属性
	add_filter( 'post_thumbnail_html', 'salong_remove_image_size_attributes' );
	// 从添加到WordPress文章的图像中删除图像大小属性
	add_filter( 'image_send_to_editor', 'salong_remove_image_size_attributes' );
}

/**
 * WordPress插入图片使用完整尺寸
 * https://wpmore.cn/wordpress-inserts-images-using-full-size.html
 */
if(isset(get_option('csf')['opt-func-29']) || get_option('csf')['opt-func-29'] === '1'){
	add_filter('image_size_names_choose', 'wpmore_image_size_names_choose');
	function wpmore_image_size_names_choose($image_sizes){
		unset($image_sizes['thumbnail']);
		unset($image_sizes['medium']);
		unset($image_sizes['large']);
		return $image_sizes;
	}
}

/**
 * WordPress登录页面返回站点信息
 * https://wpmore.cn/login_headerurl-login_headertitle.html
 */
if(isset(get_option('csf')['opt-func-30']) || get_option('csf')['opt-func-30'] === '1'){
	add_filter('login_headerurl', function () {
    get_bloginfo('url');
	});
	add_filter('login_headertitle', function () {
			get_bloginfo('name');
	});
}

/**
 * 去除WordPress utf8mb4不支持的非法字符
 * https://wpmore.cn/strip_invalid_text.html
 */
if(isset(get_option('csf')['opt-func-31']) || get_option('csf')['opt-func-31'] === '1'){
	function rm_strip_invalid_text($str){
		$regex = '/
		(
				(?: [\x00-\x7F]                  # single-byte sequences   0xxxxxxx
				|   [\xC2-\xDF][\x80-\xBF]       # double-byte sequences   110xxxxx 10xxxxxx
				|   \xE0[\xA0-\xBF][\x80-\xBF]   # triple-byte sequences   1110xxxx 10xxxxxx * 2
				|   [\xE1-\xEC][\x80-\xBF]{2}
				|   \xED[\x80-\x9F][\x80-\xBF]
				|   [\xEE-\xEF][\x80-\xBF]{2}
				|    \xF0[\x90-\xBF][\x80-\xBF]{2} # four-byte sequences   11110xxx 10xxxxxx * 3
				|    [\xF1-\xF3][\x80-\xBF]{3}
				|    \xF4[\x80-\x8F][\x80-\xBF]{2}
				){1,50}                          # ...one or more times
		)
		| .                                  # anything else
		/x';

		return preg_replace($regex, '$1', $str);
	}
}

/**
 * 使用内存缓存优化 WordPress 后台媒体库加载
 * https://wpmore.cn/memory-cache-optimization-wordpress-background-media-library-loading.html
 */
if(isset(get_option('csf')['opt-func-32']) || get_option('csf')['opt-func-32'] === '1'){
	// 缓存获取附件的月份。
	add_filter('media_library_months_with_files', function($months){
		$months    = get_transient('ddyai_media_library_months');

		if($months === false) {
				global $wpdb;

				$months = $wpdb->get_results("SELECT DISTINCT YEAR( post_date ) AS year, MONTH( post_date ) AS month FROM $wpdb->posts WHERE post_type = 'attachment' ORDER BY post_date DESC");

				set_transient('ddyai_media_library_months', $months, WEEK_IN_SECONDS);
		}

		return $months;
	});
}

/**
 * 移除Windows Live Writer
 * https://wpmore.cn/wlwmanifest.html
 */
if(get_option('csf')['opt-func-33'] === '0' || empty(get_option('csf')['opt-func-33'])){
	remove_action('wp_head', 'wlwmanifest_link');
}

/**
 * 百度验证码
 */
if( isset(get_option('csf')['opt-tool-1']) && !empty(get_option('csf')['opt-tool-1'])){
	add_action('wp_head', 'tbaidu', -1);
	function tbaidu() {
			echo '<meta name="baidu-site-verification" content="'.get_option('csf')['opt-tool-1'].'" />'.PHP_EOL;
	}
}

/**
 * Bing 验证码
 */
if( isset(get_option('csf')['opt-tool-2']) && !empty(get_option('csf')['opt-tool-2'])){
	add_action('wp_head', 'tbing', -2);
	function tbing() {
			echo '<meta name="msvalidate.01" content="'.get_option('csf')['opt-tool-2'].'" />'.PHP_EOL;
	}
}

/**
 * Google 验证码
 */
if( isset(get_option('csf')['opt-tool-3']) && !empty(get_option('csf')['opt-tool-3'])){
	add_action('wp_head', 'tgoogle', -3);
	function tgoogle() {
			echo '<meta name="google-site-verification" content="'.get_option('csf')['opt-tool-3'].'" />'.PHP_EOL;
	}
}

/**
 * Yandex 验证码
 */
if( isset(get_option('csf')['opt-tool-4']) && !empty(get_option('csf')['opt-tool-4'])){
	add_action('wp_head', 'tyandex', -4);
	function tyandex() {
			echo '<meta name="yandex-verification" content="'.get_option('csf')['opt-tool-4'].'" />'.PHP_EOL;
	}
}

/**
 * 360 验证码
 */
if( isset(get_option('csf')['opt-tool-5']) && !empty(get_option('csf')['opt-tool-5'])){
	add_action('wp_head', 't360', -5);
	function t360() {
			echo '<meta name="360-site-verification" content="'.get_option('csf')['opt-tool-5'].'" />'.PHP_EOL;
	}
}

/**
 * 搜狗验证码
 */
if( isset(get_option('csf')['opt-tool-6']) && !empty(get_option('csf')['opt-tool-6'])){
	add_action('wp_head', 'tsogou', -6);
	function tsogou() {
			echo '<meta name="sogou_site_verification" content="'.get_option('csf')['opt-tool-6'].'" />'.PHP_EOL;
	}
}

/**
 * 头条验证码
 */
if( isset(get_option('csf')['opt-tool-7']) && !empty(get_option('csf')['opt-tool-7'])){
	add_action('wp_head', 'ttoutiao', -7);
	function ttoutiao() {
			echo '<meta name="toutiao-site-verification" content="'.get_option('csf')['opt-tool-7'].'" />'.PHP_EOL;
	}
}

/**
 * 神马验证码
 */
if( isset(get_option('csf')['opt-tool-8']) && !empty(get_option('csf')['opt-tool-8'])){
	add_action('wp_head', 'tshenma', -7);
	function tshenma() {
			echo '<meta name="shenma-site-verification" content="'.get_option('csf')['opt-tool-8'].'" />'.PHP_EOL;
	}
}

/**
 * 百度自动推送
 */
if( isset(get_option('csf')['opt-tool-9']) && get_option('csf')['opt-tool-9'] ==='1'){
	add_action('wp_footer', 'opt_push_1', 90);
	function opt_push_1()
	{
			if (get_option('_prefix_my_options')['opt-push-1'] == '1') {
					?>
<script>
(function(){
var bp = document.createElement('script');
var curProtocol = window.location.protocol.split(':')[0];
if (curProtocol === 'https') {
	bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
}
else {
	bp.src = 'http://push.zhanzhang.baidu.com/push.js';
}
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(bp, s);
})();
</script>
			<?php
			}
	}
}

/**
 * 百度普通收录API提交
 */
if( isset(get_option('csf')['opt-tool-10']) ){
	function OptToll10(){
		$webhome = get_option('home'); // home

		$urls = array(
				get_the_permalink(),
		);
		$api = 'http://data.zz.baidu.com/urls?site='.$webhome.'&token='.get_option('csf')['opt-tool-10'];
		$ch = curl_init();
		$options = array(
		CURLOPT_URL => $api,
		CURLOPT_POST => true,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POSTFIELDS => implode("\n", $urls),
		CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
		);
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);

		// echo '<!-- 百度主动推送调试结果 开始 -->'. "\n";
		// echo '<!-- api:'.$api.' -->'. "\n";
		// echo '<!-- return:'.$result.' -->'. "\n";
		// echo '<!-- 百度主动推送调试结果 结束 -->'. "\n";
	}
	add_action('wp_footer', 'OptToll10', 91);
}

/**
 * 360 自动收录
 */
if( isset(get_option('csf')['opt-tool-11']) && !empty(get_option('csf')['opt-tool-11'])){
	add_action('wp_footer', 'opt_push_3', 92);
	function opt_push_3()
	{?>
<script>
(function(){
var src = "https://jspassport.ssl.qhimg.com/11.0.1.js?<?php echo get_option('csf')['opt-tool-11']; ?>";
document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
			<?php
	}
}

/**
 * 百度统计
 */
if( isset(get_option('csf')['opt-tool-12']) && !empty(get_option('csf')['opt-tool-12'])){
	add_action('wp_head', 'baidu_statistics', 99);
	function baidu_statistics()
	{
					echo '<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?'.get_option('csf')['opt-tool-12'].'";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>'.PHP_EOL;
	}
}

/**
 * 顶部代码
 */
if( isset(get_option('csf')['opt-other-1']) && !empty(get_option('csf')['opt-other-1'])){
	add_action('wp_head', 'opt_other_1', 98);
	function opt_other_1()
	{ echo get_option('csf')['opt-other-1']; }
}

/**
 * 底部代码
 */
if( isset(get_option('csf')['opt-other-2']) && !empty(get_option('csf')['opt-other-2'])){
	add_action('wp_footer', 'opt_other_2', 93);
	function opt_other_2()
	{ echo get_option('csf')['opt-other-2']; }
}
