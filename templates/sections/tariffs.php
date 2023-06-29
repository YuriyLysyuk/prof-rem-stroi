<?php
/**
 * Секция Tariffs
 *
 * @package prof-rem-stroi
 */

// $isShow = get_field( 'video-reviews_show', 'option' );
// $title = get_field( 'video-reviews_title', 'option' );
// $list = get_field( 'video-reviews_list', 'option' );

?>

<? //if ( $isShow && $list ) : ?>

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

<? //endif; ?>

