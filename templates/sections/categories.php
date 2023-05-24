<?php
/**
 * Секция Categories
 *
 * @package prof-rem-stroi
 */

$args = [ 
	'taxonomy' => [ 'uslugi' ],
	'hide_empty' => false,
];

if ( is_tax() ) {
	$currentTerm = get_queried_object();
	$currentTermID = $currentTerm->term_id;

	$args['parent'] = $currentTermID;
} else {
	$args['parent'] = 0;
}

$terms = get_terms( $args );

?>

<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>

	<section class="categories">
		<div class="categories__grid">
			<?php
			foreach ( $terms as $term ) :
				$termID = (int) $term->term_id;

				$title = $term->name;
				$taxonomy = $term->taxonomy;
				$termUrl = get_term_link( $termID, $taxonomy );
				$termImgUrl = get_field( 'common_img', $taxonomy . '_' . $termID );

				if ( ! $termImgUrl ) {
					$termImgUrl = 'https://fakeimg.pl/720x405?font=noto';
				}
				?>
				<a class="category" href="<?= esc_url( $termUrl ) ?>">
					<img class="category__img" src="<?= esc_url( $termImgUrl ) ?>" alt="<?= esc_attr( $title ) ?>" loading="lazy" />

					<div class="category__shadow"></div>

					<div class="category__title">
						<?= esc_html( $title ) ?>
					</div>

					<div class="category__more" href="#">Подробнее</div>
				</a>

			<?php endforeach; ?>
		</div>
	</section>

<?php endif; ?>

