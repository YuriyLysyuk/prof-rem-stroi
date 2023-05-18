<?php
/**
 * Меню
 *
 * @package prof-rem-stroi
 */

register_nav_menus(
	array(
		'header_menu' => 'Главное меню в шапке',
		'header_page_menu' => 'Меню страницы в шапке'
	)
);

/**
 * Анкорное меню на странице
 */
require get_template_directory() . '/inc/nav_walkers/Header_Page_Walker_Nav_Menu.php';

/**
 * Добавляем переключатель главного меню
 */
add_filter( 'wp_nav_menu_items', 'add_menu_toggle_link', 10, 2 );
function add_menu_toggle_link( $items, $args ) {
	if ( $args->theme_location == 'header_page_menu' ) {
		$items = "
      <li class='header__nav-item menu-toggle'>
        <label class='header__nav-link menu-toggle__label' for='menu-toggle'>
          <span class='bars'>
            <span></span>
            <span></span>
            <span></span>
          </span>

          <span>Меню</span>
        </label>
      </li>
    " . $items;
	}

	return $items;
}
