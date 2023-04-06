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
	?>

</main>

<?php
get_footer();
