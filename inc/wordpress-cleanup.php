<?php
/**
 * Удаление лишнего функционала
 *
 * @package prof-rem-stroi
 */

/**
 *  Удаление emoji
 */
function prs_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	add_filter( 'tiny_mce_plugins', 'prs_disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'prs_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'prs_disable_emojis' );

function prs_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

function prs_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/11/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );

		$emoji_url = apply_filters( 'emoji_url', 'https://s.w.org/images/core/emoji/11/72x72/' );
		$urls = array_diff( $urls, array( $emoji_url ) );
	}

	return $urls;
}
