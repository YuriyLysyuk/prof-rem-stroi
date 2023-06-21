<?php
/**
 * Модалка отправки сметы
 *
 * @package prof-rem-stroi
 */

$mailRecipient = get_field( 'email_recipient', 'options' );
$mailSmetaSubject = get_field( 'email_smeta_subject', 'options' );

?>

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

			<input type="hidden" name="admin_email" value="<?= esc_attr( $mailRecipient ) ?>">
			<input type="hidden" name="subject" value="<?= esc_attr( $mailSmetaSubject ) ?>">

			<button class="btn btn_small" type="submit">Отправить</button>

			<div class="js-error error error_hidden"></div>
		</form>
	</div>
</section>
