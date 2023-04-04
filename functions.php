<?php
/**
 * prof-rem-stroi functions and definitions
 *
 * @package prof-rem-stroi
 */

if ( ! defined( 'PRS_VERSION' ) ) {
	define( 'PRS_VERSION', '1.0.0' );
}

/**
 * Предустановки темы
 */
function prs_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'prs_setup' );

/**
 * Подключение скриптов и стилей
 */
function prs_scripts() {
	wp_enqueue_style( 'prs-vendors-style', get_template_directory_uri() . '/assets/build/css/vendors.css', array(), PRS_VERSION );

	wp_enqueue_style( 'prs-style', get_template_directory_uri() . '/assets/build/css/main.css', array(), PRS_VERSION );

	wp_enqueue_script( 'prs-vendors-script', get_template_directory_uri() . '/assets/build/js/vendors.js', array(), PRS_VERSION, true );

	wp_enqueue_script( 'prs-script', get_template_directory_uri() . '/assets/build/js/main.js', array( 'prs-vendors-script' ), PRS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'prs_scripts' );