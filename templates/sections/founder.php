<?php
/**
 * Секция Founder
 *
 * @package prof-rem-stroi
 */

$name = get_field( 'founder_name', 'option' );
$position = get_field( 'founder_position', 'option' );
$quote = get_field( 'founder_quote', 'option' );
$photoUrl = get_field( 'founder_photo', 'option' );
$signUrl = get_field( 'founder_sign', 'option' );

?>

<section class="founder">
	<div class="founder__inner">
		<div class="founder__words">
			<blockquote cite="https://www.huxley.net/bnw/four.html">
				<p>
					<?= esc_html( $quote ) ?>
				</p>
			</blockquote>

			<img class="founder__sign" src="<?= esc_url( $signUrl ) ?>" alt="Подпись основателя" loading="lazy" />
		</div>

		<div class="founder__photo">
			<img src="<?= esc_url( $photoUrl ) ?>" alt="Основатель компании" loading="lazy" />

			<p class="founder__desc">
				<?= esc_html( $position ) ?>
			</p>

			<p class="founder__name">
				<?= esc_html( $name ) ?>
			</p>
		</div>
	</div>
</section>
