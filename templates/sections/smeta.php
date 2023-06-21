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

<section class="modal hidden" data-modal="smeta">
	<div class="modal__header">
		<h3 class="modal__title">Отправка сметы</h3>

		<button class="modal__close" type="button" data-modal-close="smeta">
			x
		</button>
	</div>

	<div class="modal__body">
		<form class="js-form form form_vertical" enctype="multipart/form-data">
			<label class="form__control">
				<i class="fa-solid fa-user"></i>

				<input type="text" name="name" placeholder="Ваше имя" />
			</label>

			<label class="form__control">
				<i class="fa-solid fa-phone"></i>

				<input class="js-phone-mask" type="text" name="tel" placeholder="Ваш номер телефона" required />
			</label>

			<label class="form__control form__control_file">
				<i class="fa-solid fa-file"></i>

				<input type="file" name="file" placeholder="Смета" />
			</label>

			<label class="form__control">
				<i class="fa-solid fa-message"></i>

				<textarea name="comment" rows="5" placeholder="Комментарий"></textarea>
			</label>

			<button class="btn btn_small" type="submit">Отправить</button>

			<div class="js-error error error_hidden"></div>
		</form>
	</div>
</section>
