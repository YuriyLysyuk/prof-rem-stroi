<?php
get_header();

$phone = get_field( 'phone', 'option' );
?>

<main>
	<section class="numbers">
		<div class="numbers__list">
			<div class="numbers__item">
				<div class="title">10+</div>
				<div class="desc"><strong>лет опыта</strong> в ремонте</div>
			</div>

			<div class="numbers__item">
				<div class="title">25+</div>
				<div class="desc">собственных <strong>бригад</strong></div>
			</div>

			<div class="numbers__item">
				<div class="title">350+</div>
				<div class="desc">реализованных <strong>объектов</strong></div>
			</div>
		</div>
	</section>

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

	<section class="video-reviews" id="video-reviews">
		<div class="video-reviews__inner">
			<h2 class="video-reviews__title">
				<span>Видео-отзывы</span> о выполненных работах
			</h2>

			<div class="js-video-reviews swiper swiper_video-reviews">
				<div class="swiper-wrapper">
					<div class="swiper-slide video-review">
						<h3 class="video-review__title">
							Ремонт студии в стиле минимализм
						</h3>

						<div class="video-review__text">
							<p>
								<strong>Адрес:</strong> Москва, ул. Изюмская, ЖК Сердце
								столицы
							</p>

							<p><strong>Заказчик:</strong> Степан Владимирович</p>
						</div>

						<!-- <iframe
									class="video"
									src="https://www.youtube.com/embed/ghmX4j8U8Jw"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope;"
									allowfullscreen
								></iframe> -->
					</div>
					<div class="swiper-slide video-review">
						<h3 class="video-review__title">
							Дизайнерский ремонт 1-комн. квартиры
						</h3>

						<div class="video-review__text">
							<p>
								<strong>Адрес:</strong> поселение Сосенское, бульвар
								Веласкеса, д. 2
							</p>

							<p><strong>Заказчик:</strong> Мария</p>
						</div>

						<!-- <iframe
									class="video"
									src="https://www.youtube.com/embed/_hiP0rHSLKM"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope;"
									allowfullscreen
								></iframe> -->
					</div>
					<div class="swiper-slide video-review">
						<h3 class="video-review__title">
							Капитальный ремонт 2-комн. квартиры
						</h3>

						<div class="video-review__text">
							<p>
								<strong>Адрес:</strong> г. Москва, м. Выхино, ул.
								Молдагуловой, д. 4
							</p>

							<p><strong>Заказчик:</strong> Симон</p>
						</div>

						<!-- <iframe
									class="video"
									src="https://www.youtube.com/embed/uIcEts4zp5o"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope;"
									allowfullscreen
								></iframe> -->
					</div>
					<div class="swiper-slide video-review">
						<h3 class="video-review__title">
							Ремонт под ключ 3-комн. квартиры
						</h3>

						<div class="video-review__text">
							<p>
								<strong>Адрес:</strong> г. Москва, м. Строгино, ул.
								Твардовского, д. 25
							</p>

							<p><strong>Заказчик:</strong> Сергей</p>
						</div>

						<!-- <iframe
									class="video"
									src="https://www.youtube.com/embed/oJrrB_s1aPs"
									frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope;"
									allowfullscreen
								></iframe> -->
					</div>
				</div>

				<div class="swiper-pagination"></div>

				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
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

	<section class="reasons">
		<div class="reasons__inner">
			<h2>
				<span>5 Реальных причин, почему</span> стоит обратиться именно к нам
			</h2>

			<ol class="reasons__list">
				<li class="reason">
					<strong>Более 350</strong> реализованных
					<strong>проектов</strong> и 11 лет опыта
				</li>

				<li class="reason">
					<strong>Знаем</strong> и соблюдаем
					<strong>СНИПы и ГОСТы</strong> на отделку
				</li>

				<li class="reason">
					<strong>Соблюдаем</strong> заявленные <strong>сроки</strong> и
					смету
				</li>

				<li class="reason">
					<strong>Работаем</strong> строго <strong>по договору</strong>
				</li>

				<li class="reason">
					Закупаем материалы оптом, ваша <strong>экономия - 15-20%</strong>
				</li>
			</ol>

			<div class="reasons__resume">
				А также, можем показать <strong>готовые объекты</strong>, <br />
				в отличие от конкурентов
			</div>
		</div>
	</section>

	<section class="hero hero_delivery text_inverted">
		<div class="hero__inner">
			<h2>
				<span>Поможем с выбором и доставкой материалов</span>
			</h2>

			<p class="hero__desc">
				Работаем с <strong>Вашими материалами</strong> или поможем купить по
				<strong>оптовым ценам</strong>. Спланируем Ваш ремонт так, чтобы он
				оставил только <strong>положительные эмоции</strong>
			</p>
		</div>
	</section>

	<section class="smeta">
		<div class="smeta__inner">
			<h2>
				У вас есть готовая
				<span>смета на ремонт?</span>
			</h2>

			<button class="btn btn_small" type="button" data-modal-open="smeta">
				Присылайте её нам
			</button>

			<div class="smeta__text">
				<p>
					Предложим <strong>лучшую цену</strong> в городе* до 31.04.2023 и
					<strong>три варианта</strong> стоимости на выбор:
				</p>

				<p class="smeta__tariffs">эконом, стандарт, премиум</p>
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

	<section class="certificates">
		<div class="certificates__inner">
			<h2 class="certificates__title">
				<span>Юридическая информация</span> о компании
			</h2>

			<div class="certificates__desc">
				ИНН: 7709700742, ОГРН: 5067746662220
			</div>

			<div class="js-certificates swiper swiper_certificates">
				<div class="swiper-wrapper">
					<div class="swiper-slide certificate">
						<a href="./img/certificates/certificate-1.jpg" data-pswp-width="600" data-pswp-height="878">
							<img src="./img/certificates/certificate-1.jpg" alt="Свидетельство ИНН" loading="lazy" />

							<div class="swiper-lazy-preloader"></div>
						</a>

						<h3 class="certificate__title">Свидетельство ИНН</h3>
					</div>

					<div class="swiper-slide certificate">
						<a href="./img/certificates/certificate-2.jpg" data-pswp-width="600" data-pswp-height="878">
							<img src="./img/certificates/certificate-2.jpg" alt="Допуск СРО" loading="lazy" />

							<div class="swiper-lazy-preloader"></div>
						</a>

						<h3 class="certificate__title">Допуск СРО</h3>
					</div>

					<div class="swiper-slide certificate">
						<a href="./img/certificates/certificate-3.jpg" data-pswp-width="600" data-pswp-height="878">
							<img src="./img/certificates/certificate-3.jpg" alt="Сертификат соответствия ИСО 9001" loading="lazy" />

							<div class="swiper-lazy-preloader"></div>
						</a>

						<h3 class="certificate__title">Сертификат ИСО</h3>
					</div>

					<div class="swiper-slide certificate">
						<a href="./img/certificates/certificate-4.jpg" data-pswp-width="600" data-pswp-height="878">
							<img src="./img/certificates/certificate-4.jpg" alt="Сертификат соответствия ГОСТ" loading="lazy" />

							<div class="swiper-lazy-preloader"></div>
						</a>

						<h3 class="certificate__title">Сертификат ГОСТ</h3>
					</div>
				</div>

				<div class="swiper-pagination"></div>

				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>

	<section class="founder">
		<div class="founder__inner">
			<div class="founder__words">
				<blockquote cite="https://www.huxley.net/bnw/four.html">
					<p>
						Наше кредо - качество по разумной цене. Мы научились убирать из
						сметы «лишнее», выполняя при этом все пожелания клиента.
					</p>
				</blockquote>

				<img class="founder__sign" src="./img/founder/sign.png" alt="Подпись основателя" loading="lazy" />
			</div>

			<div class="founder__photo">
				<img src="./img/founder/founder.png" alt="Основатель компании" loading="lazy" />

				<p class="founder__desc">основатель компании «Prof Remont»</p>

				<p class="founder__name">Николай Аристов</p>
			</div>
		</div>
	</section>

	<section class="seo" id="contacts">
		<div class="seo__inner">
			<h2>Ремонт квартир под ключ в Москве</h2>

			<div class="seo__content">
				<ul class="seo__contacts">
					<li>
						<i class="fa-solid fa-phone"></i>

						<a href="<?= esc_html( $phone['link'] ) ?>"><?= esc_html( $phone['text'] ) ?></a>
					</li>

					<li>
						<i class="fa-solid fa-envelope"></i>

						<a href="mailto:prof-rem-stroi@mail.ru">prof-rem-stroi@mail.ru</a>
					</li>

					<li>
						<i class="fa-solid fa-location-dot"></i>

						<a href="#">Россия, г.Москва, шоссе Энтузиастов, 31, стр. 5, офис
							82/115</a>
					</li>

					<li>
						<i class="fa-brands fa-whatsapp"></i>

						<a href="#">Написать в WhatsApp</a>
					</li>
				</ul>

				<p>
					Московская строительная компания «Ляпота» известна на столичном
					рынке ремонта с 2014 года. Благодаря накопленному опыту и
					неизменно высокому качеству услуг, наша СК занимает высокие строки
					в рейтинге организаций, выполняющих ремонтно-строительные работы
					для горожан и жителей пригорода.
				</p>

				<p>
					Мы получаем сотни приятных отзывов от клиентов которые заказывали
					наши услуги по ремонту. Пользователи делятся ссылками на наш сайт.
					Обмениваясь информацией на форумах и в социальных сетях, они
					рекомендуют нас как надежную компанию, которой можно доверить
					ремонт квартир, переоборудование частных домов, перепланировку
					офисов и бизнес-центров.
				</p>

				<p>
					В старину на Руси было в обиходе красивое слово «лепота», что
					означает: «великолепие, красота, изящество». При восприятии на
					слух вместо буквы «е» зачастую слышится «я» — ляпота. В российских
					фильмах так подчеркнуто выражается восхищение чем-либо. Мы решили,
					что так будет называться наша СК-компания, которая дарит людям
					красоту.
				</p>
			</div>
		</div>
	</section>

	<section class="sales">
		<div class="sales__inner">
			<h2>
				Хотите экономить 10% на ремонте?
				<span>мы знаем как!</span>
			</h2>

			<div class="sales__form">
				<form class="form form_horisontal">
					<label class="form__control">
						<i class="fa-solid fa-user"></i>

						<input type="text" name="name" placeholder="Ваше имя" />
					</label>

					<label class="form__control">
						<i class="fa-solid fa-phone"></i>

						<input type="tel" name="tel" placeholder="Ваш номер телефона" required />
					</label>

					<button class="btn btn_small" type="submit">Хочу знать</button>
				</form>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
