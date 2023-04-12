<?php
/**
 * Template Name: Главная
 *
 * @package prof-rem-stroi
 */

get_header();

?>

<main>

	<?php
	get_template_part( 'templates/sections/hero' );

	get_template_part( 'templates/sections/numbers' );

	get_template_part( 'templates/sections/reasons' );

	get_template_part( 'templates/sections/hero', 'delivery' );

	?>

</main>

<?php
get_footer();
