<?php
/**
 * Секция Smeta
 *
 * @package prof-rem-stroi
 */

$title = get_field( 'smeta_title', 'option' );
$desc = get_field( 'smeta_desc', 'option' );
$tariffs = get_field( 'smeta_tariffs', 'option' );
$buttonText = get_field( 'smeta_button-text', 'option' );
$buttonModalId = get_field( 'smeta_button-modal', 'option' );

?>

<section class="smeta">
	<div class="smeta__inner">
		<h2>
			<?= $title ?>
		</h2>

		<button class="btn btn_small" type="button" data-modal-open="<?= esc_attr( $buttonModalId ) ?>">
			<?= esc_html( $buttonText ) ?>
		</button>

		<div class="smeta__text">
			<p>
				<?= $desc ?>
			</p>

			<p class="smeta__tariffs">
				<?= $tariffs ?>
			</p>
		</div>
	</div>
</section>

<?php
get_template_part( 'templates/modals/smeta' );
