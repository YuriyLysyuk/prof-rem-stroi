<?php
/**
 * Секция Categories
 *
 * @package prof-rem-stroi
 */

$args = [ 
	'post_type' => 'services',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'menu_order',
	'order' => 'ASC',
];

if ( is_singular( 'services' ) ) {
	$currentItem = get_post();
	$currentItemID = $currentItem->ID;

	$args['post_parent'] = $currentItemID;
} else {
	$args['post_parent'] = 0;
}

$items = get_posts( $args );

$placeholderUrl = get_field( 'categories_placeholder', 'options' );

?>

<?php if ( $items && ! is_wp_error( $items ) ) : ?>

	<section class="categories">
		<div class="categories__grid">
			<?php
			foreach ( $items as $item ) :
				$itemID = (int) $item->ID;

				$title = $item->post_title;

				if ( 'noindex' === YoastSEO()->meta->for_post( $itemID )->robots['index'] ) {
					$itemUrl = '#';
				} else {
					$itemUrl = get_post_permalink( $itemID );
				}


				$itemThumbnailUrl = get_field( 'common_thumbnail', $itemID );

				if ( ! $itemThumbnailUrl ) {
					$itemThumbnailUrl = $placeholderUrl;
				}
				?>
				<a class="category" href="<?= esc_url( $itemUrl ) ?>">
					<img class="category__img" src="<?= esc_url( $itemThumbnailUrl ) ?>" alt="<?= esc_attr( $title ) ?>"
						loading="lazy" />

					<div class="category__shadow"></div>

					<div class="category__title">
						<?= esc_html( $title ) ?>
					</div>

					<div class="category__more">Подробнее</div>
				</a>

			<?php endforeach; ?>
		</div>
	</section>

<?php endif; ?>

