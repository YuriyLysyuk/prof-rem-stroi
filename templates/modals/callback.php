<?php
/**
 * Модалка обратного звонка
 *
 * @package prof-rem-stroi
 */

$mailRecipient = get_field( 'email_recipient', 'options' );
$mailSmetaSubject = get_field( 'email_callback_subject', 'options' );
$currentPageUrl = home_url( $_SERVER['REQUEST_URI'] );

?>

<section class="modal hidden" data-modal="callback">
	<div class="modal__header">
		<h3 class="modal__title">Запросить звонок</h3>

		<button class="modal__close" type="button" data-modal-close="callback">
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

			<label class="form__control">
				<i class="fa-solid fa-message"></i>

				<textarea name="comment" rows="5" placeholder="Комментарий"></textarea>
			</label>

			<input type="hidden" name="admin_email" value="<?= esc_attr( $mailRecipient ) ?>">
			<input type="hidden" name="subject" value="<?= esc_attr( $mailSmetaSubject ) ?>">
			<input type="hidden" name="page" value="<?= esc_attr( $currentPageUrl ) ?>">

			<button class="btn btn_small" type="submit">Перезвоните мне</button>
		</form>
	</div>
</section>
