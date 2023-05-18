<?php
$siteName = get_bloginfo( 'name' );
$siteDescription = get_bloginfo( 'description' );

$logoUrl = get_field( 'logo', 'option' );
$favicon180Url = get_field( 'favicon_180', 'option' );
$favicon32Url = get_field( 'favicon_32', 'option' );
$favicon16Url = get_field( 'favicon_16', 'option' );

$phone = get_field( 'phone', 'option' );
$workTime = get_field( 'work_time', 'option' );
$workPromise = get_field( 'work_promise', 'option' );
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?= esc_url( $favicon180Url ) ?>" />

	<link rel="icon" type="image/png" sizes="32x32" href="<?= esc_url( $favicon32Url ) ?>" />

	<link rel="icon" type="image/png" sizes="16x16" href="<?= esc_url( $favicon16Url ) ?>" />

	<?php wp_head(); ?>
</head>

<body>
	<header class="js-header header">
		<!-- Чекбокс открытия главного меню -->
		<input class="menu-toggle__input" type="checkbox" id="menu-toggle" name="menu-toggle" />

		<div class="header__inner">
			<a href="/" class="logo">
				<img class="logo__img" src="<?= esc_url( $logoUrl ) ?>" alt="Логотип <?= esc_html( $siteName ) ?>" />
			</a>

			<div class="header__average">
				<div class="header__title">
					<?= esc_html( $siteDescription ) ?>
				</div>

				<?php
				wp_nav_menu( [ 
					'theme_location' => 'header_page_menu',
					'depth' => 1,
					'container' => false,
					'fallback_cb' => false,
					'echo' => true,
					'walker' => new Header_Page_Walker_Nav_Menu(),
					'items_wrap' => '<ul class="header__nav">%3$s</ul>',
				] );
				?>
			</div>

			<div class="header__contacts">
				<a href="<?= esc_html( $phone['link'] ) ?>" class="header__phone"><?= esc_html( $phone['text'] ) ?></a>

				<p class="header__time">
					<?= esc_html( $workTime ) ?>
				</p>

				<p class="header__promise">
					<?= esc_html( $workPromise ) ?>
				</p>
			</div>
		</div>

		<nav class="main-nav">
			<ul>
				<li>
					<input type="radio" name="level-1" id="level-1-remont-kvartir" />

					<label for="level-1-remont-kvartir">
						<a href="#">Ремонт квартир</a>

						<i class="fa-solid fa-angle-right"></i>
					</label>

					<ul>
						<li>
							<input type="radio" name="level-2-remont-kvartir" id="level-2-remont-studii" />

							<label for="level-2-remont-studii">
								<a href="#">Ремонт студии</a>

								<i class="fa-solid fa-angle-right"></i>
							</label>

							<ul>
								<li><a href="#">Черновой ремонт квартиры-студии</a></li>

								<li><a href="#">Косметический ремонт квартиры-студии</a></li>

								<li><a href="#">Капитальный ремонт квартиры-студии</a></li>

								<li><a href="#">Дизайнерский ремонт квартиры-студии</a></li>
							</ul>
						</li>

						<li>
							<input type="radio" name="level-2-remont-kvartir" id="level-2-remont-1k-kvartiry" />

							<label for="level-2-remont-1k-kvartiry">
								<a href="#">Ремонт 1-комн. квартиры</a>

								<i class="fa-solid fa-angle-right"></i>
							</label>

							<ul>
								<li><a href="#">Черновой ремонт 1-комн. квартиры</a></li>

								<li><a href="#">Косметический ремонт 1-комн. квартиры</a></li>

								<li><a href="#">Капитальный ремонт 1-комн. квартиры</a></li>

								<li><a href="#">Дизайнерский ремонт 1-комн. квартиры</a></li>
							</ul>
						</li>

						<li>
							<input type="radio" name="level-2-remont-kvartir" id="level-2-remont-2k-kvartiry" />

							<label for="level-2-remont-2k-kvartiry">
								<a href="#">Ремонт 2-комн. квартиры</a>

								<i class="fa-solid fa-angle-right"></i>
							</label>

							<ul>
								<li><a href="#">Черновой ремонт 2-комн. квартиры</a></li>

								<li><a href="#">Косметический ремонт 2-комн. квартиры</a></li>

								<li><a href="#">Капитальный ремонт 2-комн. квартиры</a></li>

								<li><a href="#">Дизайнерский ремонт 2-комн. квартиры</a></li>
							</ul>
						</li>

						<li>
							<input type="radio" name="level-2-remont-kvartir" id="level-2-remont-3k-kvartiry" />

							<label for="level-2-remont-3k-kvartiry">
								<a href="#">Ремонт 3-комн. квартиры</a>

								<i class="fa-solid fa-angle-right"></i>
							</label>

							<ul>
								<li><a href="#">Черновой ремонт 3-комн. квартиры</a></li>

								<li><a href="#">Косметический ремонт 3-комн. квартиры</a></li>

								<li><a href="#">Капитальный ремонт 3-комн. квартиры</a></li>

								<li><a href="#">Дизайнерский ремонт 3-комн. квартиры</a></li>
							</ul>
						</li>

						<li>
							<input type="radio" name="level-2-remont-kvartir" id="level-2-remont-4k-kvartiry" />

							<label for="level-2-remont-4k-kvartiry">
								<a href="#">Ремонт 4-комн. квартиры</a>

								<i class="fa-solid fa-angle-right"></i>
							</label>

							<ul>
								<li><a href="#">Черновой ремонт 4-комн. квартиры</a></li>

								<li><a href="#">Косметический ремонт 4-комн. квартиры</a></li>

								<li><a href="#">Капитальный ремонт 4-комн. квартиры</a></li>

								<li><a href="#">Дизайнерский ремонт 4-комн. квартиры</a></li>
							</ul>
						</li>

						<li>
							<input type="radio" name="level-2-remont-kvartir" id="level-2-remont-5k-kvartiry" />

							<label for="level-2-remont-5k-kvartiry">
								<a href="#">Ремонт 5-комн. квартиры</a>

								<i class="fa-solid fa-angle-right"></i>
							</label>

							<ul>
								<li><a href="#">Черновой ремонт 5-комн. квартиры</a></li>

								<li><a href="#">Косметический ремонт 5-комн. квартиры</a></li>

								<li><a href="#">Капитальный ремонт 5-комн. квартиры</a></li>

								<li><a href="#">Дизайнерский ремонт 5-комн. квартиры</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li>
					<input type="radio" name="level-1" id="level-1-remont-komnat" />

					<label for="level-1-remont-komnat">
						<a href="#">Ремонт комнат</a>

						<i class="fa-solid fa-angle-right"></i>
					</label>

					<ul>
						<li><a href="#">Ремонт ванной комнаты</a></li>
						<li><a href="#">Ремонт туалета</a></li>
						<li><a href="#">Ремонт кухни</a></li>
						<li><a href="#">Ремонт спальни</a></li>
					</ul>
				</li>

				<li><a href="#">Ремонт офисов</a></li>
				<li><a href="#">Ремонт домов</a></li>
				<li><a href="#">Дизайн</a></li>
				<li><a href="#">Прочие услуги</a></li>
				<li><a href="#">Вакансии</a></li>
			</ul>
		</nav>
	</header>

	<!-- Нужен для отслеживания положения плавающей шапки -->
	<div class="js-watch-header"></div>
