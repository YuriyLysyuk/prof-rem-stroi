<?php
/**
 * Секция Tariffs
 *
 * @package prof-rem-stroi
 */

$isShow = get_field( 'tariffs_show', 'option' );
$title = get_field( 'tariffs_title', 'option' );
$list = get_field( 'tariffs_list', 'option' );
$resume = get_field( 'tariffs_resume', 'option' );

$count = 1;

?>

<? if ( $isShow && $list ) : ?>

	<section class="tariffs" id="tariffs">
		<div class="tariffs__inner">
			<h2>
				<?= $title ?>
			</h2>

			<div class="tariffs__grid">

				<? foreach ( $list as $tariff ) : ?>

					<?php

					$isAccent = $tariff['is-accent'];
					$title = esc_html( $tariff['title'] );
					$oldCost = esc_html( $tariff['old-cost'] );
					$newCost = esc_html( $tariff['new-cost'] );
					$included = esc_html( $tariff['included'] );
					$works = $tariff['works'];
					$materials = esc_html( $tariff['materials'] );

					?>
					<div class="tariff <?= $isAccent ? 'tariff_active' : '' ?>">
						<h3 class="tariff__title">
							<?= $title ?>
						</h3>

						<p class="tariff__old-price">от
							<?= $oldCost ?> ₽ м² по полу
						</p>

						<p class="tariff__new-price"><span>от
								<?= $newCost ?> ₽ м²
							</span></p>

						<p class="tariff__price-desc">по полу</p>

						<p><strong>В стоимость входит:</strong></p>

						<p>
							<?= $included ?>
						</p>

						<?php if ( $works ) : ?>

							<input class="tariff__toggle-input" id="tariff_<?= $count ?>" type="checkbox" />

							<label class="tariff__toggle-label" for="tariff_<?= $count ?>">Список работ</label>

							<ul class="tariff__work-list">

								<?php foreach ( $works as $work ) : ?>

									<li>
										<?= esc_html( $work['desc'] ) ?>
									</li>

								<?php endforeach; // foreach ($works as $work): ?>

							</ul>

						<?php endif; // if ($works): ?>

						<p>
							<strong>Материалы:</strong>
							<?= $materials ?>
						</p>

						<a class="btn tariff__btn" href="#">Узнать стоимость ремонта <span> за 1 минуту</span></a>
					</div>

					<?php

					$count++;

					?>

				<?php endforeach; ?>

			</div>

			<div class="tariffs__resume">
				<div class="text">
					<?= $resume ?>
				</div>
			</div>
		</div>
	</section>


<? endif; ?>

