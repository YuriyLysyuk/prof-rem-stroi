<?php
/**
 * Секция Certificates
 *
 * @package prof-rem-stroi
 */

$title = get_field( 'certificates_title', 'option' );
$list = get_field( 'certificates_list', 'option' );
$inn = get_field( 'requisites_inn', 'option' );
$ogrn = get_field( 'requisites_ogrn', 'option' );

?>

<section class="certificates">
	<div class="certificates__inner">
		<h2 class="certificates__title">
			<?= $title ?>
		</h2>

		<div class="certificates__desc">
			ИНН:
			<?= esc_html( $inn ) ?>, ОГРН:
			<?= esc_html( $ogrn ) ?>
		</div>

		<? if ( $list ) : ?>
			<div class="js-certificates swiper swiper_certificates">
				<div class="swiper-wrapper">
					<? foreach ( $list as $certificate ) : ?>

						<?php
						$certificateTitle = $certificate['title'];
						$certificateUrl = $certificate['img'];
						?>

						<div class="swiper-slide certificate">
							<a href="<?= esc_url( $certificateUrl ) ?>" data-pswp-width="600" data-pswp-height="878">
								<img src="<?= esc_url( $certificateUrl ) ?>" alt="<?= esc_attr( $certificateTitle ) ?>" loading="lazy" />

								<div class="swiper-lazy-preloader"></div>
							</a>

							<h3 class="certificate__title">
								<?= esc_html( $certificateTitle ) ?>
							</h3>
						</div>
					<? endforeach; ?>
				</div>

				<div class="swiper-pagination"></div>

				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		<? endif; ?>
	</div>
</section>
