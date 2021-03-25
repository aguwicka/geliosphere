<?php
if(!is_admin()){
	require_once "php-libs/MobileDetect/Mobile_Detect.php";
	$detect = new Mobile_Detect;
}
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

	//adding custom post-type and taxonomy
function template_custom_post_type (){

	//products
	$labels = array(
		'name' => 'Продукция',
		'singular_name' => 'Продукция',
		'add_new' => 'Добавить продукцию',
		'all_items' => 'Все продукции',
		'add_new_item' => 'Добавить новую продукцию',
		'edit_item' => 'Редактировать продукцию',
		'new_item' => 'Новая продукция',
		'view_item' => 'Показать продукцию',
		'search_item' => 'Поиск продукциий',
		'not_found' => 'Продукция не найдена',
		'not_found_in_trash' => 'В корзине продукция не найдена',
		'parent_item_colon' => 'Родительская продукция'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'produkcija',
			'with_front' => false
		),
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 6,
		'exclude_from_search' => false
	);
	register_post_type('products',$args);

	//news
	$labels = array(
		'name' => 'Новости',
		'singular_name' => 'Новости',
		'add_new' => 'Добавить новость',
		'all_items' => 'Все новости',
		'add_new_item' => 'Добавить новую новость',
		'edit_item' => 'Редактировать новость',
		'new_item' => 'Новая новость',
		'view_item' => 'Показать новость',
		'search_item' => 'Поиск новостей',
		'not_found' => 'Новость не найдена',
		'not_found_in_trash' => 'В корзине новость не найдена',
		'parent_item_colon' => 'Родительская новость'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'novosti',
			'with_front' => false
		),
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 7,
		'exclude_from_search' => false
	);
	register_post_type('news',$args);

	//interview
	$labels = array(
		'name' => 'Интервью',
		'singular_name' => 'Интервью',
		'add_new' => 'Добавить интервью',
		'all_items' => 'Все интервью',
		'add_new_item' => 'Добавить новое интервью',
		'edit_item' => 'Редактировать интервью',
		'new_item' => 'Новое интервью',
		'view_item' => 'Показать интервью',
		'search_item' => 'Поиск интервью',
		'not_found' => 'Интервью не найдено',
		'not_found_in_trash' => 'В корзине интервью не найдено',
		'parent_item_colon' => 'Родительское интервью'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'intervju',
			'with_front' => false
		),
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 7,
		'exclude_from_search' => false
	);
	register_post_type('interview',$args);

	//developments
	$labels = array(
		'name' => 'События',
		'singular_name' => 'События',
		'add_new' => 'Добавить событие',
		'all_items' => 'Все события',
		'add_new_item' => 'Добавить новое событие',
		'edit_item' => 'Редактировать событие',
		'new_item' => 'Новое событие',
		'view_item' => 'Показать событие',
		'search_item' => 'Поиск события',
		'not_found' => 'Событие не найдено',
		'not_found_in_trash' => 'В корзине событие не найдено',
		'parent_item_colon' => 'Родительское событие'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array( 
			'slug' => 'sobytie',
			'with_front' => false
		),
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 7,
		'exclude_from_search' => false
	);
	register_post_type('developments',$args);

}
add_action('init','template_custom_post_type');

function template_custom_taxonomies() {
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Категории',
		'singular_name' => 'Категории',
		'search_items' => 'Поиск Категории',
		'all_items' => 'Все категории',
		'parent_item' => 'Родительская категория',
		'parent_item_colon' => 'Родительская категория:',
		'edit_item' => 'Редактировать категорию',
		'update_item' => 'Обновить категорию',
		'add_new_item' => 'Добавить новую категорию',
		'new_item_name' => 'Новая категория',
		'menu_name' => 'Категории'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categoria','with_front' => false),
	);
	register_taxonomy('categoria', array('products'), $args);
}
add_action( 'init' , 'template_custom_taxonomies' );

//disable guttenberg on few pages
add_filter( 'use_block_editor_for_post', 'disable_gutenberg_for_post', 10, 2 );
function disable_gutenberg_for_post( $use, $post ){
	if(($post->ID==10) || ($post->ID==16) || ($post->ID==14) || ($post->ID==12) || ($post->ID==8) || ($post->ID==6))
		return false;

	return $use;
}

//add styles to admin-panel
add_action('admin_head', 'my_acf_admin_head');
function my_acf_admin_head() {?>
	<style>#menu-posts{display: none !important}</style>
	<?php
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'  => 'Настройки основной информации',
		'menu_title'  => 'Основная информация',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Настройки контактной информации',
		'menu_title'  => 'Общая контактная информация',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Настройки шапки сайта',
		'menu_title'  => 'Шапка сайта',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Настройки подвала сайта',
		'menu_title'  => 'Подвал сайта',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Настройки форм благодарности',
		'menu_title'  => 'Формы благодарности',
		'parent_slug' => 'theme-general-settings',
	));
}
if(!is_admin()){
	if($detect->isMobile()){
		function new_excerpt_length($length) {
			return 5;
		}
		add_filter('excerpt_length', 'new_excerpt_length');
	}
	else{
		function new_excerpt_length($length) {
			return 30;
		}
		add_filter('excerpt_length', 'new_excerpt_length');
	}
}