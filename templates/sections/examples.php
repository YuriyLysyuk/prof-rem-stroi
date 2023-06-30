<?php
/**
 * Секция Examples
 *
 * @package prof-rem-stroi
 */

$isShow = get_field( 'examples_show', 'option' );
$title = get_field( 'examples_title', 'option' );
$list = get_field( 'examples_list', 'option' );

$count = 1;

?>

<? if ( $isShow && $list ) : ?>

	<section class="examples" id="examples">
		<h2>
			<?= $title ?>
		</h2>

		<div class="examples__grid">
			<? foreach ( $list as $example ) : ?>

				<?php

				$title = esc_html( $example['title'] );
				$imgBeforeUrl = esc_url( $example['img-before'] );
				$imgAfterUrl = esc_url( $example['img-after'] );
				$imgMore = $example['img-more'];
				$completedWorks = $example['completed-works'];
				$repairPeriod = esc_html( $example['repair-period'] );
				$repairCost = esc_html( $example['repair-cost'] );

				$thumbnails = [];
				$thumbnails[] = $imgAfterUrl;

				if ( $imgMore ) {
					foreach ( $imgMore as $thumbnail ) {
						$thumbnails[] = esc_url( $thumbnail );
					}
				}

				?>

				<div class="example">
					<h3 class="example__title">
						<?= $title ?>
					</h3>

					<div class="example__content">
						<div class="example__slider">
							<div class="js-example-<?= $count ?> swiper swiper_example">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="image-compare">
											<img src="<?= $imgBeforeUrl ?>" loading="lazy" />

											<img src="<?= $imgAfterUrl ?>" loading="lazy" />
										</div>

										<div class="swiper-lazy-preloader"></div>
									</div>

									<?php if ( $imgMore ) : ?>

										<?php foreach ( $imgMore as $imgFullUrl ) : ?>

											<div class="swiper-slide">
												<img src="<?= esc_url( $imgFullUrl ) ?>" loading="lazy" />

												<div class="swiper-lazy-preloader"></div>
											</div>

										<?php endforeach; // foreach ( $imgMore as $imgUrl) : ?>

									<?php endif; // if ($imgMore): ?>

								</div>

								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>

							<div class="js-example-thumbs-<?= $count ?> swiper swiper_example-thumbs">
								<div class="swiper-wrapper">

									<?php if ( $thumbnails ) : ?>

										<?php foreach ( $thumbnails as $thumbnailUrl ) : ?>

											<div class="swiper-slide">
												<img src="<?= $thumbnailUrl ?>" loading="lazy" />

												<div class="swiper-lazy-preloader"></div>
											</div>

										<?php endforeach; // foreach ( $thumbnails as $thumbnailUrl) : ?>

									<?php endif; // if ($thumbnails): ?>

								</div>
							</div>
						</div>

						<div class="example__text">

							<?php if ( $completedWorks ) : ?>

								<p><strong>Выполненные работы:</strong></p>

								<ul>

									<?php foreach ( $completedWorks as $work ) : ?>

										<li>
											<?= esc_html( $work['desc'] ) ?>
										</li>

									<?php endforeach; // foreach ($completedWorks as $work): ?>

								</ul>

							<?php endif; // if ($completedWorks): ?>

							<p><strong>Срок ремонта:</strong></p>

							<p>
								<?= $repairPeriod ?>
							</p>

							<p><strong>Стоимость ремонта:</strong></p>

							<p>
								<?= $repairCost ?>
							</p>
						</div>
					</div>
				</div>

				<?php

				$count++;

				?>

			<?php endforeach; ?>


		</div>
	</section>

<? endif; ?>

