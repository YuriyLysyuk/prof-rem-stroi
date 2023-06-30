<?php
/**
 * Секция Price
 *
 * @package prof-rem-stroi
 */

$isShow = get_field( 'price_show', 'option' );
$title = get_field( 'price_title', 'option' );
$list = get_field( 'price_list', 'option' );

$count = 1;
$isFirstPrice = true;

?>

<? if ( $isShow && $list ) : ?>

	<section class="price">
		<div class="price__inner">
			<h2>
				<?= $title ?>
			</h2>

			<div class="price__content">

				<? foreach ( $list as $price ) : ?>

					<?php

					$priceTitle = esc_html( $price['title'] );

					$works = $price['works'];
					$worksCount = 0;

					if ( $works ) {
						$worksCount = count( $works );
					}

					$isCollapsedTable = false;

					if ( $worksCount > COLLAPSED_TABLE_WORK_COUNT ) {
						$isCollapsedTable = true;
					}

					?>

					<input class="price__radio" type="radio" name="price" id="price_<?= $count ?>" <?= $isFirstPrice ? 'checked' : '' ?> />

					<label class="price__label btn btn_tiny btn_ghost" for="price_<?= $count ?>">
						<?= $priceTitle ?>
					</label>

					<div class="price__wrap">

						<?php if ( $isCollapsedTable ) : ?>

							<input type="checkbox" id="price_collapsed_<?= $count ?>" />

						<?php endif; // if ($isCollapsedTable): ?>

						<div class="price__table <?= $isCollapsedTable ? 'price__table_collapse' : '' ?>">
							<table>
								<thead>
									<tr>
										<th>
											<p>Наименование</p>
										</th>
										<th>
											<p>Мера</p>
										</th>
										<th>
											<p>Цена</p>
										</th>
									</tr>
								</thead>

								<tbody>
									<?php if ( $works ) : ?>

										<?php foreach ( $works as $work ) : ?>

											<tr>
												<td>
													<?= esc_html( $work['desc'] ) ?>
												</td>
												<td>
													<?= esc_html( $work['unit'] ) ?>
												</td>
												<td>
													<?= esc_html( $work['cost'] ) ?> ₽
												</td>
											</tr>

										<?php endforeach; // foreach ( $works  as $work) : ?>

									<?php endif; // if ( $works ): ?>

								</tbody>
							</table>
						</div>

						<?php if ( $isCollapsedTable ) : ?>

							<label class="btn" for="price_collapsed_<?= $count ?>">Развернуть</label>

						<?php endif; // if ($isCollapsedTable): ?>

					</div>

					<?php

					$isFirstPrice = false;
					$count++;

					?>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

<? endif; ?>

