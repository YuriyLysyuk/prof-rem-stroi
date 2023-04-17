<?php
get_header();

$phone = get_field( 'phone', 'option' );
?>

<main>
	<section class="categories">
		<div class="categories__grid">
			<a class="category" href="#">
				<img class="category__img" src="./img/categories/remont-kvartir.jpg" alt="Ремонт квартир" loading="lazy" />

				<div class="category__shadow"></div>

				<div class="category__title">Ремонт квартир</div>

				<div class="category__more" href="#">Подробнее</div>
			</a>

			<a class="category" href="#">
				<img class="category__img" src="./img/categories/remont-kottedzhey.jpg" alt="Ремонт квартир" loading="lazy" />

				<div class="category__shadow"></div>

				<div class="category__title">Ремонт коттеджей</div>

				<div class="category__more" href="#">Подробнее</div>
			</a>

			<a class="category" href="#">
				<img class="category__img" src="./img/categories/remont-ofisov.jpg" alt="Ремонт квартир" loading="lazy" />

				<div class="category__shadow"></div>

				<div class="category__title">Ремонт офисов</div>

				<div class="category__more" href="#">Подробнее</div>
			</a>

			<a class="category" href="#">
				<img class="category__img" src="./img/categories/dizayn-interera.jpg" alt="Ремонт квартир" loading="lazy" />

				<div class="category__shadow"></div>

				<div class="category__title">Дизайн интерьера</div>

				<div class="category__more" href="#">Подробнее</div>
			</a>

			<a class="category" href="#">
				<img class="category__img" src="./img/categories/remont-komnat.jpg" alt="Ремонт квартир" loading="lazy" />

				<div class="category__shadow"></div>

				<div class="category__title">Ремонт комнат</div>

				<div class="category__more" href="#">Подробнее</div>
			</a>

			<a class="category" href="#">
				<img class="category__img" src="./img/categories/prochie-uslugi.jpg" alt="Ремонт квартир" loading="lazy" />

				<div class="category__shadow"></div>

				<div class="category__title">Прочие услуги</div>

				<div class="category__more" href="#">Подробнее</div>
			</a>
		</div>
	</section>

	<section class="examples" id="examples">
		<h2><span>Примеры наших работ</span> и их стоимость</h2>

		<div class="examples__grid">
			<div class="example">
				<h3 class="example__title">Капитальный ремонт студии 35 м²</h3>

				<div class="example__content">
					<div class="example__slider">
						<div class="js-example-1 swiper swiper_example">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="image-compare">
										<img src="./img/examples/example-1-before.jpg" loading="lazy" />

										<img src="./img/examples/example-1-after.jpg" loading="lazy" />
									</div>

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>

						<div class="js-example-thumbs-1 swiper swiper_example-thumbs">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="./img/examples/example-1-after.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="example__text">
						<p><strong>Выполненные работы:</strong></p>

						<ul>
							<li>Стяжка пола до 6 см</li>
							<li>Укладка ламината</li>
							<li>Монтаж плинтусов</li>
							<li>Частичная штукатурка стен</li>
							<li>Установка подоконников</li>
							<li>Окраска стен в 2 слоя</li>
							<li>Облицовка плиткой пола в ванной</li>
							<li>Облицовка плиткой стен в ванной</li>
						</ul>

						<p><strong>Срок ремонта:</strong></p>

						<p>24 дня</p>

						<p><strong>Стоимость ремонта:</strong></p>

						<p>450 000 ₽</p>
					</div>
				</div>
			</div>

			<div class="example">
				<h3 class="example__title">Капитальный ремонт студии 35 м²</h3>

				<div class="example__content">
					<div class="example__slider">
						<div class="js-example-2 swiper swiper_example">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="image-compare">
										<img src="./img/examples/example-1-before.jpg" loading="lazy" />

										<img src="./img/examples/example-1-after.jpg" loading="lazy" />
									</div>

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>

						<div class="js-example-thumbs-2 swiper swiper_example-thumbs">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="./img/examples/example-1-after.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="example__text">
						<p><strong>Выполненные работы:</strong></p>

						<ul>
							<li>Стяжка пола до 6 см</li>
							<li>Укладка ламината</li>
							<li>Монтаж плинтусов</li>
							<li>Частичная штукатурка стен</li>
							<li>Установка подоконников</li>
							<li>Окраска стен в 2 слоя</li>
							<li>Облицовка плиткой пола в ванной</li>
							<li>Облицовка плиткой стен в ванной</li>
						</ul>

						<p><strong>Срок ремонта:</strong></p>

						<p>24 дня</p>

						<p><strong>Стоимость ремонта:</strong></p>

						<p>450 000 ₽</p>
					</div>
				</div>
			</div>

			<div class="example">
				<h3 class="example__title">Капитальный ремонт студии 35 м²</h3>

				<div class="example__content">
					<div class="example__slider">
						<div class="js-example-3 swiper swiper_example">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="image-compare">
										<img src="./img/examples/example-1-before.jpg" loading="lazy" />

										<img src="./img/examples/example-1-after.jpg" loading="lazy" />
									</div>

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>

						<div class="js-example-thumbs-3 swiper swiper_example-thumbs">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="./img/examples/example-1-after.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="example__text">
						<p><strong>Выполненные работы:</strong></p>

						<ul>
							<li>Стяжка пола до 6 см</li>
							<li>Укладка ламината</li>
							<li>Монтаж плинтусов</li>
							<li>Частичная штукатурка стен</li>
							<li>Установка подоконников</li>
							<li>Окраска стен в 2 слоя</li>
							<li>Облицовка плиткой пола в ванной</li>
							<li>Облицовка плиткой стен в ванной</li>
						</ul>

						<p><strong>Срок ремонта:</strong></p>

						<p>24 дня</p>

						<p><strong>Стоимость ремонта:</strong></p>

						<p>450 000 ₽</p>
					</div>
				</div>
			</div>

			<div class="example">
				<h3 class="example__title">Капитальный ремонт студии 35 м²</h3>

				<div class="example__content">
					<div class="example__slider">
						<div class="js-example-4 swiper swiper_example">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="image-compare">
										<img src="./img/examples/example-1-before.jpg" loading="lazy" />

										<img src="./img/examples/example-1-after.jpg" loading="lazy" />
									</div>

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>

						<div class="js-example-thumbs-4 swiper swiper_example-thumbs">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="./img/examples/example-1-after.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-2.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-3.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-4.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>

								<div class="swiper-slide">
									<img src="./img/examples/example-5.jpg" loading="lazy" />

									<div class="swiper-lazy-preloader"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="example__text">
						<p><strong>Выполненные работы:</strong></p>

						<ul>
							<li>Стяжка пола до 6 см</li>
							<li>Укладка ламината</li>
							<li>Монтаж плинтусов</li>
							<li>Частичная штукатурка стен</li>
							<li>Установка подоконников</li>
							<li>Окраска стен в 2 слоя</li>
							<li>Облицовка плиткой пола в ванной</li>
							<li>Облицовка плиткой стен в ванной</li>
						</ul>

						<p><strong>Срок ремонта:</strong></p>

						<p>24 дня</p>

						<p><strong>Стоимость ремонта:</strong></p>

						<p>450 000 ₽</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="tariffs" id="tariffs">
		<div class="tariffs__inner">
			<h2><span>Стоимость ремонта</span></h2>

			<div class="tariffs__grid">
				<div class="tariff">
					<h3 class="tariff__title">Черновой ремонт новостройки</h3>

					<p class="tariff__old-price">от 6 100 ₽ м² по полу</p>

					<p class="tariff__new-price"><span>от 4 880 ₽ м²</span></p>

					<p class="tariff__price-desc">по полу</p>

					<p><strong>В стоимость входит:</strong></p>

					<p>
						Демонтажные, черновые и чистовые работы, работы по электрике.
					</p>

					<input class="tariff__toggle-input" id="chernovoy" type="checkbox" />

					<label class="tariff__toggle-label" for="chernovoy">Список работ</label>

					<ul class="tariff__work-list">
						<li>Поклеим новые обои</li>
						<li>Постелим новый линолиум или ковролин</li>
						<li>Установим плинтусы</li>
						<li>Установим новые электроточки</li>
					</ul>

					<p><strong>Материалы:</strong> не входят в стоимость</p>

					<a class="btn tariff__btn" href="#">Узнать стоимость ремонта <span> за 1 минуту</span></a>
				</div>

				<div class="tariff tariff_active">
					<h3 class="tariff__title">Капитальный ремонт новостройки</h3>

					<p class="tariff__old-price">от 9 840 ₽ м² по полу</p>

					<p class="tariff__new-price"><span>от 8 390 ₽ м²</span></p>

					<p class="tariff__price-desc">по полу</p>

					<p><strong>В стоимость входит:</strong></p>

					<p>
						Демонтажные, черновые и чистовые работы, работы по электрике,
						разводка труб.
					</p>

					<input class="tariff__toggle-input" id="pod_kluch" type="checkbox" />

					<label class="tariff__toggle-label" for="pod_kluch">Список работ</label>

					<ul class="tariff__work-list">
						<li>Поклеим новые обои</li>
						<li>Постелим новый линолиум или ковролин</li>
						<li>Установим плинтусы</li>
						<li>Установим новые электроточки</li>
					</ul>

					<p><strong>Материалы:</strong> не входят в стоимость</p>

					<a class="btn tariff__btn" href="#">Узнать стоимость ремонта <span> за 1 минуту</span></a>
				</div>

				<div class="tariff">
					<h3 class="tariff__title">Чистовой ремонт новостройки</h3>

					<p class="tariff__old-price">от 4 210 ₽ м² по полу</p>

					<p class="tariff__new-price"><span>от 3 510 ₽ м²</span></p>

					<p class="tariff__price-desc">по полу</p>

					<p><strong>В стоимость входит:</strong></p>

					<p>
						Демонтажные, черновые и чистовые работы, все электротехнические
						и сантехнические работы, возведение перегородок.
					</p>

					<input class="tariff__toggle-input" id="chistovoy" type="checkbox" />

					<label class="tariff__toggle-label" for="chistovoy">Список работ</label>

					<ul class="tariff__work-list">
						<li>Поклеим новые обои</li>
						<li>Постелим новый линолиум или ковролин</li>
						<li>Установим плинтусы</li>
						<li>Установим новые электроточки</li>
					</ul>

					<p><strong>Материалы:</strong> не входят в стоимость</p>

					<a class="btn tariff__btn" href="#">Узнать стоимость ремонта <span> за 1 минуту</span></a>
				</div>
			</div>

			<div class="tariffs__resume">
				<div class="text">Ответив всего на 5 вопросов</div>
			</div>
		</div>
	</section>

	<section class="price">
		<div class="price__inner">
			<h2>Цены по видам работ</h2>

			<div class="price__content">
				<input class="price__radio" type="radio" name="price" id="price1" checked />

				<label class="price__label btn btn_tiny btn_ghost" for="price1">Бюджетный ремонт квартиры</label>

				<div class="price__wrap">
					<input type="checkbox" id="price1_full" />

					<div class="price__table price__table_collapse">
						<table>
							<thead>
								<tr>
									<th>
										<p>Наименование</p>
									</th>
									<th>
										<p>Количество</p>
									</th>
									<th>
										<p>Цена</p>
									</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Укладка напольной керамической плитки 30х30 см</td>
									<td>м²</td>
									<td>700 ₽</td>
								</tr>

								<tr>
									<td>Штукатурка стен слоем до 1 см</td>
									<td>м²</td>
									<td>300 ₽</td>
								</tr>

								<tr>
									<td>Укладка настенной керамической плитки 30х30 см</td>
									<td>м²</td>
									<td>900 ₽</td>
								</tr>

								<tr>
									<td>Установка смесителя</td>
									<td>шт</td>
									<td>1000 ₽</td>
								</tr>

								<tr>
									<td>Установка умывальника</td>
									<td>шт</td>
									<td>1600 ₽</td>
								</tr>

								<tr>
									<td>Установка полотенцесушителя</td>
									<td>шт</td>
									<td>2500 ₽</td>
								</tr>

								<tr>
									<td>Установка ванны</td>
									<td>шт</td>
									<td>2400 ₽</td>
								</tr>

								<tr>
									<td>Устройство реечного потолка</td>
									<td>м²</td>
									<td>620 ₽</td>
								</tr>

								<tr>
									<td>Установка унитаза напольного</td>
									<td>шт</td>
									<td>2000 ₽</td>
								</tr>

								<tr>
									<td>Установка точечного светильника</td>
									<td>шт</td>
									<td>200 ₽</td>
								</tr>

								<tr>
									<td>Устройство реечного потолка</td>
									<td>м²</td>
									<td>620 ₽</td>
								</tr>

								<tr>
									<td>Установка унитаза напольного</td>
									<td>шт</td>
									<td>2000 ₽</td>
								</tr>

								<tr>
									<td>Установка точечного светильника</td>
									<td>шт</td>
									<td>200 ₽</td>
								</tr>
							</tbody>
						</table>
					</div>

					<label class="btn" for="price1_full">Развернуть</label>
				</div>

				<input class="price__radio" type="radio" name="price" id="price2" />

				<label class="price__label btn btn_tiny btn_ghost" for="price2">Капитальный ремонт квартиры</label>

				<div class="price__wrap">
					<div class="price__table">
						<table>
							<thead>
								<tr>
									<th>
										<p>Наименование</p>
									</th>
									<th>
										<p>Количество</p>
									</th>
									<th>
										<p>Цена</p>
									</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Укладка напольной керамической плитки 30х30 см</td>
									<td>м²</td>
									<td>800 ₽</td>
								</tr>

								<tr>
									<td>Штукатурка стен слоем до 1 см</td>
									<td>м²</td>
									<td>300 ₽</td>
								</tr>

								<tr>
									<td>Укладка настенной керамической плитки 30х30 см</td>
									<td>м²</td>
									<td>900 ₽</td>
								</tr>

								<tr>
									<td>Установка смесителя</td>
									<td>шт</td>
									<td>1000 ₽</td>
								</tr>

								<tr>
									<td>Установка умывальника</td>
									<td>шт</td>
									<td>1600 ₽</td>
								</tr>

								<tr>
									<td>Установка полотенцесушителя</td>
									<td>шт</td>
									<td>2500 ₽</td>
								</tr>

								<tr>
									<td>Установка ванны</td>
									<td>шт</td>
									<td>2400 ₽</td>
								</tr>

								<tr>
									<td>Устройство реечного потолка</td>
									<td>м²</td>
									<td>620 ₽</td>
								</tr>

								<tr>
									<td>Установка унитаза напольного</td>
									<td>шт</td>
									<td>2000 ₽</td>
								</tr>

								<tr>
									<td>Установка точечного светильника</td>
									<td>шт</td>
									<td>200 ₽</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<input class="price__radio" type="radio" name="price" id="price3" />

				<label class="price__label btn btn_tiny btn_ghost" for="price3">Дизайнерский ремонт квартиры</label>

				<div class="price__wrap">
					<div class="price__table">
						<table>
							<thead>
								<tr>
									<th>
										<p>Наименование</p>
									</th>
									<th>
										<p>Количество</p>
									</th>
									<th>
										<p>Цена</p>
									</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>Укладка напольной керамической плитки 30х30 см</td>
									<td>м²</td>
									<td>900 ₽</td>
								</tr>

								<tr>
									<td>Штукатурка стен слоем до 1 см</td>
									<td>м²</td>
									<td>300 ₽</td>
								</tr>

								<tr>
									<td>Укладка настенной керамической плитки 30х30 см</td>
									<td>м²</td>
									<td>900 ₽</td>
								</tr>

								<tr>
									<td>Установка смесителя</td>
									<td>шт</td>
									<td>1000 ₽</td>
								</tr>

								<tr>
									<td>Установка умывальника</td>
									<td>шт</td>
									<td>1600 ₽</td>
								</tr>

								<tr>
									<td>Установка полотенцесушителя</td>
									<td>шт</td>
									<td>2500 ₽</td>
								</tr>

								<tr>
									<td>Установка ванны</td>
									<td>шт</td>
									<td>2400 ₽</td>
								</tr>

								<tr>
									<td>Устройство реечного потолка</td>
									<td>м²</td>
									<td>620 ₽</td>
								</tr>

								<tr>
									<td>Установка унитаза напольного</td>
									<td>шт</td>
									<td>2000 ₽</td>
								</tr>

								<tr>
									<td>Установка точечного светильника</td>
									<td>шт</td>
									<td>200 ₽</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
