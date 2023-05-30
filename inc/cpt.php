<?php
/**
 * Кастомные типы записей
 *
 * @package prof-rem-stroi
 */

/**
 * Регистрация услуг
 */
add_action( 'init', 'register_services_post_type' );

function register_services_post_type() {
	register_post_type( 'services', [ 
		'labels' => array(
			'name' => 'Услуги',
			'singular_name' => 'Услуга',
			'search_items' => 'Поиск услуги',
			'all_items' => 'Все услуги',
			'parent_item' => 'Родительская услуга',
			'parent_item_colon' => 'Родительская услуга:',
			'edit_item' => 'Редактировать услугу',
			'update_item' => 'Обновить услугу',
			'add_new_item' => 'Добавление новой услуги',
			'new_item_name' => 'Новая услуга',
			'menu_name' => 'Услуги',
		),
		'description' => '',
		'public' => true,
		'show_in_rest' => false,
		'menu_position' => 3,
		'menu_icon' => 'dashicons-screenoptions',
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'hierarchical' => true,
		'rewrite' => [ 'slug' => 'services' ],
		'has_archive' => false,
		'can_export' => true,
		'supports' => [ 'title', 'thumbnail', 'page-attributes' ],
	] );

	add_rewrite_rule(
		'^services/([^/]+)/?$',
		'index.php?post_type=services&name=$matches[1]',
		'top'
	);
}

function services_flatten_hierarchies( $post_link, $post ) {
	if ( 'services' != $post->post_type ) {
		return $post_link;
	}
	$uri = '';
	foreach ( $post->ancestors as $parent ) {
		$uri = get_post( $parent )->post_name . "/" . $uri;
	}
	return str_replace( $uri, '', $post_link );
}
add_filter( 'post_type_link', 'services_flatten_hierarchies', 10, 2 );


