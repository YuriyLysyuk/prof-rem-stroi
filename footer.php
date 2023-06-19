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
			<?php
			wp_nav_menu( [ 
				'theme_location' => 'footer_menu_1',
				'depth' => 0,
				'container' => false,
				'fallback_cb' => false,
				'echo' => true,
				'walker' => new Footer_Walker_Nav_Menu(),
				'items_wrap' => '<div class="footer__menu"><h3 class="title">' . wp_get_nav_menu_name( 'footer_menu_1' ) . '</h3><ul class="menu">%3$s</ul></div>',
			] );

			wp_nav_menu( [ 
				'theme_location' => 'footer_menu_2',
				'depth' => 0,
				'container' => false,
				'fallback_cb' => false,
				'echo' => true,
				'walker' => new Footer_Walker_Nav_Menu(),
				'items_wrap' => '<div class="footer__menu"><h3 class="title">' . wp_get_nav_menu_name( 'footer_menu_2' ) . '</h3><ul class="menu">%3$s</ul></div>',
			] );

			wp_nav_menu( [ 
				'theme_location' => 'footer_menu_3',
				'depth' => 0,
				'container' => false,
				'fallback_cb' => false,
				'echo' => true,
				'walker' => new Footer_Walker_Nav_Menu(),
				'items_wrap' => '<div class="footer__menu"><h3 class="title">' . wp_get_nav_menu_name( 'footer_menu_3' ) . '</h3><ul class="menu">%3$s</ul></div>',
			] );

			wp_nav_menu( [ 
				'theme_location' => 'footer_menu_4',
				'depth' => 0,
				'container' => false,
				'fallback_cb' => false,
				'echo' => true,
				'walker' => new Footer_Walker_Nav_Menu(),
				'items_wrap' => '<div class="footer__menu"><h3 class="title">' . wp_get_nav_menu_name( 'footer_menu_4' ) . '</h3><ul class="menu">%3$s</ul></div>',
			] );

			wp_nav_menu( [ 
				'theme_location' => 'footer_menu_5',
				'depth' => 0,
				'container' => false,
				'fallback_cb' => false,
				'echo' => true,
				'walker' => new Footer_Walker_Nav_Menu(),
				'items_wrap' => '<div class="footer__menu"><h3 class="title">' . wp_get_nav_menu_name( 'footer_menu_5' ) . '</h3><ul class="menu">%3$s</ul></div>',
			] );
			?>
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
		</form>
	</div>
</section>

<!-- Оверлей для модалок, всегда один -->
<div class="js-overlay overlay hidden"></div>

<?php wp_footer(); ?>

</body>

</html>
