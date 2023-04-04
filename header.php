<?php
$siteName = get_bloginfo( 'name' );
$logoUrl = get_field( 'logo', 'option' );
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-touch-icon.png" />

	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png" />

	<link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png" />

	<?php wp_head(); ?>
</head>

<body>
	<header class="js-header header">
		<!-- Чекбокс открытия главного меню -->
		<input class="menu-toggle__input" type="checkbox" id="menu-toggle" name="menu-toggle" />

		<div class="header__inner">
			<a href="/" class="logo">
				<img class="logo__img" src="<?= $logoUrl ?>" alt="Логотип <?= $siteName ?>" />
			</a>

			<div class="header__average">
				<div class="header__title">Строительно-отделочная компания</div>

				<ul class="header__nav">
					<li class="header__nav-item menu-toggle">
						<label class="header__nav-link menu-toggle__label" for="menu-toggle">
							<span class="bars">
								<span></span>
								<span></span>
								<span></span>
							</span>

							<span>Меню</span>
						</label>
					</li>

					<li class="header__nav-item">
						<a href="#examples" class="header__nav-link">Примеры работ</a>
					</li>

					<li class="header__nav-item">
						<a href="#video-reviews" class="header__nav-link">Отзывы</a>
					</li>

					<li class="header__nav-item">
						<a href="#tariffs" class="header__nav-link">Тарифы</a>
					</li>

					<li class="header__nav-item">
						<a href="#contacts" class="header__nav-link">Контакты</a>
					</li>
				</ul>
			</div>

			<div class="header__contacts">
				<a href="tel:+79254211745" class="header__phone">+7 (925) 421-17-45</a>

				<p class="header__time">Ежедневно с 8:00 до 22:00</p>

				<p class="header__promise">Перезвоним через 15 минут!</p>
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
