<?php
/**
 * Секция Hero
 *
 * @package prof-rem-stroi
 */

$post = get_post();
$postID = $post->ID;

$title = get_field( 'title', $postID );
$desc = get_field( 'description', $postID );

?>

<section class="hero hero_main text_inverted">
	<div class="hero__inner">
		<h1>
			<?= $title ?>
		</h1>

		<p class="hero__desc">
			<?= $desc ?>
		</p>
	</div>
</section>
