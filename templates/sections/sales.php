<?php
/**
 * Секция Sales
 *
 * @package prof-rem-stroi
 */

$title = get_field( 'sales_title', 'option' );
$buttonText = get_field( 'sales_button-text', 'option' );

?>

<section class="sales">
	<div class="sales__inner">
		<h2>
			<?= $title ?>
		</h2>

		<div class="sales__form">
			<form class="js-form form form_horisontal">
				<label class="form__control">
					<i class="fa-solid fa-user"></i>

					<input type="text" name="name" placeholder="Ваше имя" />
				</label>

				<label class="form__control">
					<i class="fa-solid fa-phone"></i>

					<input class="js-phone-mask" type="text" name="tel" placeholder="Ваш номер телефона" required />
				</label>

				<input type="hidden" name="admin_email" value="lysyuk.y@yandex.ru">
				<input type="hidden" name="subject" value="Форма: как сэкономить">

				<button class="btn btn_small" type="submit">
					<?= esc_html( $buttonText ) ?>
				</button>
			</form>
		</div>
	</div>
</section>