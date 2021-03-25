	<?php
	//adding custom post-type and taxonomy
	function template_custom_post_type (){

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
			'rewrite' => array( 'slug' => 'camp-sessions','with_front' => false),
			'capability_type' => 'post',
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'menu_position' => 7,
			'exclude_from_search' => false
		);
		register_post_type('products',$args);
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
			'rewrite' => array( 'slug' => 'categori','with_front' => false),
		);

		register_taxonomy('categoria', array('products'), $args);