<?php
get_header();

$phone = get_field( 'phone', 'option' );
?>

<main>

	<?php
	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;

	else :

		get_template_part( 'template-parts/content', 'none' );
	
	endif;
	?>

</main>

<?php
get_footer();
