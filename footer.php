<?php
$siteName = esc_attr( get_bloginfo( 'name' ) );

$socialsTitle = get_field( 'socials_title', 'option' );
$socialsList = get_field( 'socials_list', 'option' );
?>

<footer class="footer">
	<div class="footer__inner">
		<? if ( $socialsList ) : ?>
			<div class="social">
				<span class="social__title">
					<?= $socialsTitle ?>
				</span>

				<? foreach ( $socialsList as $social ) : ?>

					<?php
					$socialUrl = esc_url( $social['url'] );
					$socialIcon = $social['icon'];
					$socialIconClass = esc_attr( $socialIcon['value'] );
					$socialTitle = esc_attr( $socialIcon['label'] );
					?>

					<a class="social__link" href="<?= $socialUrl ?>" target="_blank" title="<?= $siteName ?> в <?= $socialTitle ?>">
						<i class="fa-brands <?= $socialIconClass ?>"></i>
					</a>
				<? endforeach; ?>
			</div>

			<hr />
		<? endif; ?>

		<div class="footer__menus">
			<div class="footer__menu">
				<h3 class="title">Ремонтные услуги</h3>

				<ul class="menu">
					<li class="menu__item"><a href="#">Ремонт квартир</a></li>
					<li class="menu__item"><a href="#">Ремонт комнат</a></li>
					<li class="menu__item"><a href="#">Ремонт новостроек</a></li>
					<li class="menu__item"><a href="#">Ремонт домов</a></li>
					<li class="menu__item"><a href="#">Ремонт офисов</a></li>
				</ul>
			</div>

			<div class="footer__menu">
				<h3 class="title">Дизайн интерьера</h3>

				<ul class="menu">
					<li class="menu__item"><a href="#">Дизайн интерьера</a></li>
					<li class="menu__item"><a href="#">Дизайн квартиры</a></li>
					<li class="menu__item"><a href="#">Дизайн комнат</a></li>
					<li class="menu__item"><a href="#">Дизайн кухни</a></li>
					<li class="menu__item"><a href="#">Дизайн ванной</a></li>
				</ul>
			</div>

			<div class="footer__menu">
				<h3 class="title">Прочие услуги</h3>

				<ul class="menu">
					<li class="menu__item"><a href="#">Калькулятор ремонта</a></li>
					<li class="menu__item"><a href="#">Приемка новостроек</a></li>
					<li class="menu__item"><a href="#">Демонтажные работы</a></li>
					<li class="menu__item">
						<a href="#">Отдельные ремонтные работы</a>
					</li>
					<li class="menu__item">
						<a href="#">Ремонт в рассрочку и кредит</a>
					</li>
				</ul>
			</div>

			<div class="footer__menu">
				<h3 class="title">Вакансии</h3>

				<ul class="menu">
					<li class="menu__item">
						<a href="#">Прораб отделочных работ</a>
					</li>
					<li class="menu__item">
						<a href="#">Работа вахтовым методом</a>
					</li>
					<li class="menu__item">
						<a href="#">Мастер отделочных работ</a>
					</li>
					<li class="menu__item"><a href="#">Плиточник-сантехник</a></li>
					<li class="menu__item"><a href="#">Электрик</a></li>
				</ul>
			</div>

			<div class="footer__menu">
				<h3 class="title">О компании</h3>

				<ul class="menu">
					<li class="menu__item"><a href="#">О компании</a></li>
					<li class="menu__item"><a href="#">Блог</a></li>
					<li class="menu__item"><a href="#">Партнерам</a></li>
					<li class="menu__item"><a href="#">Контакты</a></li>
					<li class="menu__item"><a href="#">Карта сайта</a></li>
				</ul>
			</div>
		</div>

		<hr />

		<div class="footer__meta">
			<p class="footer__copyright">
				<span class="mark">©</span> 2012-2023 ООО «Проф-Рем-Строй»
			</p>

			<p class="footer__requisits">ИНН: 7709700742, ОГРН: 5067746662220</p>

			<p class="footer__note">
				Сайт не является публичной офертой и носит информационный характер.
			</p>
		</div>
	</div>
</footer>

<section class="modal hidden" data-modal="smeta">
	<div class="modal__header">
		<h3 class="modal__title">Отправка сметы</h3>

		<button class="modal__close" type="button" data-modal-close="smeta">
			x
		</button>
	</div>

	<div class="modal__body">
		<form class="form form_vertical">
			<label class="form__control">
				<i class="fa-solid fa-user"></i>

				<input type="text" name="name" placeholder="Ваше имя" />
			</label>

			<label class="form__control">
				<i class="fa-solid fa-phone"></i>

				<input type="tel" name="tel" placeholder="Ваш номер телефона" required />
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
		</form>
	</div>
</section>

<!-- Оверлей для модалок, всегда один -->
<div class="js-overlay overlay hidden"></div>

<?php wp_footer(); ?>

</body>

</html>
