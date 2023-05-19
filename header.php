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

		<?php
		wp_nav_menu( [ 
			'theme_location' => 'header_menu',
			'depth' => 3,
			'container' => false,
			'fallback_cb' => false,
			'echo' => true,
			'walker' => new Main_Walker_Nav_Menu(),
			'items_wrap' => '<nav class="main-nav"><ul>%3$s</ul></nav>',
		] );
		?>
	</header>

	<!-- Нужен для отслеживания положения плавающей шапки -->
	<div class="js-watch-header"></div>
