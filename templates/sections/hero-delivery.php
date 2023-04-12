<?php
/**
 * Секция Hero Delivery
 *
 * @package prof-rem-stroi
 */

$title = get_field( 'hero-delivery_title', 'option' );
$desc = get_field( 'hero-delivery_desc', 'option' );

?>

<section class="hero hero_delivery text_inverted">
	<div class="hero__inner">
		<h1>
			<?= $title ?>
		</h1>

		<p class="hero__desc">
			<?= $desc ?>
		</p>
	</div>
</section>
