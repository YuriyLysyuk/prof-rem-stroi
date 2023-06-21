<?php
/**
 * Отключение редактора
 *
 * @package prof-rem-stroi
 */

/**
 * Шаблоны и id страниц с отключенным редактором
 */
function prs_disable_editor( $id = false ) {

	$excluded_templates = array(
		'templates/front-page.php',
		'templates/thank-you.php',
	);

	$excluded_ids = array(
	);

	if ( empty( $id ) )
		return false;

	$id = intval( $id );
	$template = get_page_template_slug( $id );

	return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );
}

/**
 * Отключение гутенберга по шаблону
 */
function prs_disable_gutenberg( $can_edit, $post_type ) {

	if ( ! ( is_admin() && ! empty( $_GET['post'] ) ) )
		return $can_edit;

	if ( prs_disable_editor( $_GET['post'] ) )
		$can_edit = false;

	return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'prs_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'prs_disable_gutenberg', 10, 2 );

/**
 * Отключение классического редактора по шаблону
 */
function prs_disable_classic_editor() {

	$screen = get_current_screen();
	if ( 'page' !== $screen->id || ! isset( $_GET['post'] ) )
		return;

	if ( prs_disable_editor( $_GET['post'] ) ) {
		remove_post_type_support( 'page', 'editor' );
	}

}
add_action( 'admin_head', 'prs_disable_classic_editor' );
