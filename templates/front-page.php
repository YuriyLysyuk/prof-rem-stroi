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

	get_template_part( 'templates/sections/smeta' );

	get_template_part( 'templates/sections/certificates' );

	?>

</main>

<?php
get_footer();
