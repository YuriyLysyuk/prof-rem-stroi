<?php
/**
 * Кастомные типы записей
 *
 * @package prof-rem-stroi
 */

/**
 * Регистрация Услуг и примеров работ
 */
add_action( 'init', 'register_example_post_type' );

// Отфильтруем ЧПУ произвольного типа
add_filter( 'post_type_link', 'uslugi_permalink', 1, 2 );

function register_example_post_type() {
	// Категории услуг
	register_taxonomy( 'uslugi', [ 'example' ], [ 
		'labels' => [ 
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
		],
		'description' => '',
		'public' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'uslugi', 'hierarchical' => true, 'with_front' => false, 'feed' => false ),
		'show_admin_column' => true,
		'show_in_quick_edit' => true,
	] );

	// Примеры работ
	register_post_type( 'example', [ 
		'labels' => array(
			'name' => 'Примеры работ',
			'singular_name' => 'Пример работы',
			'add_new' => 'Добавить пример',
			'add_new_item' => 'Добавление Примера работы',
			'edit' => 'Редактировать',
			'edit_item' => 'Редактирование Примера работы',
			'new_item' => 'Новый Пример работы',
			'view_item' => 'Смотреть Примеры работ',
			'search_items' => 'Искать Примеры работ',
			'menu_name' => 'Примеры работ',
		),
		'description' => '',
		'public' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'menu_position' => 3,
		'menu_icon' => 'dashicons-screenoptions',
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'uslugi/%uslugi%', 'with_front' => false, 'pages' => false, 'feeds' => false, 'feed' => false ),
		'has_archive' => 'uslugi',
		'query_var' => true,
		'supports' => array( 'title', 'editor' ),
		'taxonomies' => array( 'uslugi' ),
	] );
}

function uslugi_permalink( $permalink, $post ) {

	// выходим если это не наш тип записи: без холдера %faqcat%
	if ( strpos( $permalink, '%uslugi%' ) === false ) {
		return $permalink;
	}

	// Получаем элементы таксы
	$terms = get_the_terms( $post, 'uslugi' );
	// если есть элемент заменим холдер
	if ( ! is_wp_error( $terms ) && ! empty( $terms ) && is_object( $terms[0] ) ) {
		$term_slug = array_pop( $terms )->slug;
	}
	// элемента нет, а должен быть...
	else {
		$term_slug = 'no-uslugi';
	}

	return str_replace( '%uslugi%', $term_slug, $permalink );
}

/**
 * Убираем описание из редактирования категорий услуг
 */
add_action( 'admin_head', 'hide_admin_uslugi_description' );
function hide_admin_uslugi_description() {
	echo '<style>
          body.taxonomy-uslugi .term-description-wrap {
              display:none;
          }
        </style>';
}
