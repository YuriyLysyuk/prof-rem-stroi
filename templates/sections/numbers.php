<?php
/**
 * Секция Numbers
 *
 * @package prof-rem-stroi
 */

$firstNumber = get_field( 'numbers_number-1', 'option' );
$firstDesc = get_field( 'numbers_desc-1', 'option' );
$secondNumber = get_field( 'numbers_number-2', 'option' );
$secondDesc = get_field( 'numbers_desc-2', 'option' );
$thirdNumber = get_field( 'numbers_number-3', 'option' );
$thirdDesc = get_field( 'numbers_desc-3', 'option' );

?>

<section class="numbers">
	<div class="numbers__list">
		<div class="numbers__item">
			<div class="title">
				<?= esc_html( $firstNumber ) ?>
			</div>

			<div class="desc">
				<?= $firstDesc ?>
			</div>
		</div>

		<div class="numbers__item">
			<div class="title">
				<?= esc_html( $secondNumber ) ?>
			</div>

			<div class="desc">
				<?= $secondDesc ?>
			</div>
		</div>

		<div class="numbers__item">
			<div class="title">
				<?= esc_html( $thirdNumber ) ?>
			</div>

			<div class="desc">
				<?= $thirdDesc ?>
			</div>
		</div>
	</div>
</section>
