<?php
/**
 * Секция Certificates
 *
 * @package prof-rem-stroi
 */

$title = get_field( 'video-reviews_title', 'option' );
$list = get_field( 'video-reviews_list', 'option' );

?>

<? if ( $list ) : ?>

	<section class="video-reviews" id="video-reviews">
		<div class="video-reviews__inner">
			<h2 class="video-reviews__title">
				<?= $title ?>
			</h2>

			<div class="js-video-reviews swiper swiper_video-reviews">
				<div class="swiper-wrapper">
					<? foreach ( $list as $videoReview ) : ?>

						<?php
						$videoReviewTitle = $videoReview['title'];
						$videoReviewAddress = $videoReview['address'];
						$videoReviewCustomer = $videoReview['customer'];
						$videoReviewUrl = $videoReview['url'];
						?>

						<div class="swiper-slide video-review">

							<h3 class="video-review__title">
								<?= esc_html( $videoReviewTitle ) ?>
							</h3>

							<div class="video-review__text">
								<p>
									<strong>Адрес:</strong>
									<?= esc_html( $videoReviewAddress ) ?>
								</p>

								<p><strong>Заказчик:</strong>
									<?= esc_html( $videoReviewCustomer ) ?>
								</p>
							</div>

							<?php if ( $videoReviewUrl ) : ?>
								<iframe class="video" src="<?= esc_url( $videoReviewUrl ) ?>" frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
							<?php endif; // if ($videoReviewUrl): ?>

						</div>
					<? endforeach; ?>
				</div>

				<div class="swiper-pagination"></div>

				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>

<? endif; ?>

