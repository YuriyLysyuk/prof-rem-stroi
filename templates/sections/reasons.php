<?php
/**
 * Секция Reasons
 *
 * @package prof-rem-stroi
 */

$title = get_field( 'reasons_title', 'option' );
$list = get_field( 'reasons_list', 'option' );
$resume = get_field( 'reasons_resume', 'option' );

?>

<section class="reasons">
	<div class="reasons__inner">
		<h2>
			<?= $title ?>
		</h2>

		<? if ( $list ) : ?>
			<ol class="reasons__list">
				<? foreach ( $list as $reason ) : ?>
					<li class="reason">
						<?= $reason['text'] ?>
					</li>
				<? endforeach; ?>
			</ol>
		<? endif; ?>

		<div class="reasons__resume">
			<?= $resume ?>
		</div>
	</div>
</section>
