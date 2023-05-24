<?php
/**
 * Секция Seo
 *
 * @package prof-rem-stroi
 */

if ( is_tax() ) {
	$currentTerm = get_queried_object();
	$currentTermID = $currentTerm->term_id;
	$taxonomy = $currentTerm->taxonomy;

	$seo = get_field( 'seo', $taxonomy . '_ ' . $currentTermID );

} else {
	$post = get_post();
	$postID = $post->ID;

	$seo = get_field( 'seo', $postID );
}


$phone = get_field( 'phone', 'option' );
$mail = get_field( 'mail', 'option' );
$address = get_field( 'address', 'option' );
$whatsapp = get_field( 'whatsapp', 'option' );

?>

<? if ( $seo && $seo['text'] ) : ?>

	<section class="seo" id="contacts">
		<div class="seo__inner">
			<?php if ( $seo['title'] ) : ?>
				<h2>
					<?= $seo['title'] ?>
				</h2>
			<?php endif; ?>

			<div class="seo__content">
				<ul class="seo__contacts">
					<li>
						<i class="fa-solid fa-phone"></i>

						<a href="<?= esc_url( $phone['link'] ) ?>">
							<?= esc_html( $phone['text'] ) ?>
						</a>
					</li>

					<li>
						<i class="fa-solid fa-envelope"></i>

						<a href="<?= esc_url( $mail['link'] ) ?>">
							<?= esc_html( $mail['text'] ) ?>
						</a>
					</li>

					<li>
						<i class="fa-solid fa-location-dot"></i>

						<a href="<?= esc_url( $address['link'] ) ?>">
							<?= esc_html( $address['text'] ) ?>
						</a>
					</li>

					<li>
						<i class="fa-brands fa-whatsapp"></i>

						<a href="<?= esc_url( $whatsapp['link'] ) ?>">
							<?= esc_html( $whatsapp['text'] ) ?>
						</a>
					</li>
				</ul>

				<?= $seo['text'] ?>
			</div>
		</div>
	</section>

<? endif; ?>

