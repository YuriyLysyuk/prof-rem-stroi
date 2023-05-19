<?php
/**
 * Меню
 *
 * @package prof-rem-stroi
 */

register_nav_menus(
	array(
		'header_menu' => 'Главное меню в шапке',
		'header_page_menu' => 'Меню страницы в шапке',
		'footer_menu_1' => 'Меню в подвале 1',
		'footer_menu_2' => 'Меню в подвале 2',
		'footer_menu_3' => 'Меню в подвале 3',
		'footer_menu_4' => 'Меню в подвале 4',
		'footer_menu_5' => 'Меню в подвале 5',
	)
);

/**
 * Анкорное меню на странице
 */
require get_template_directory() . '/inc/nav_walkers/Header_Page_Walker_Nav_Menu.php';

/**
 * Основное меню
 */
require get_template_directory() . '/inc/nav_walkers/Main_Walker_Nav_Menu.php';

/**
 * Меню в подвале
 */
require get_template_directory() . '/inc/nav_walkers/Footer_Walker_Nav_Menu.php';

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
