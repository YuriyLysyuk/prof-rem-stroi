<?php
/**
 * Секция Hero
 *
 * @package prof-rem-stroi
 */

$post = get_post();
$postID = $post->ID;
$title = get_field( 'hero_title', $postID );

if ( ! $title ) {
	$title = $post->post_title;
}

$utp = get_field( 'hero_utp', 'option' );
$buttonText = get_field( 'hero_button-text', 'option' );
$buttonUrl = get_field( 'hero_button-url', 'option' );

?>

<section class="hero hero_main text_inverted">
	<div class="hero__inner">
		<h1>
			<?= $title ?>
		</h1>

		<p class="hero__desc">
			<?= $utp ?>
		</p>
	</div>

	<div class="hero__btn">
		<a class="btn" href="<?= esc_url( $buttonUrl ) ?>">
			<?= esc_html( $buttonText ) ?>
		</a>
	</div>
</section>
