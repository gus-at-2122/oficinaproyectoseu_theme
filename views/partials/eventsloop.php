<?php

$args = array(
	'orderby' => 'date',
	'order'   => 'DESC',
	'post_type' => 'event',
	'posts_per_page' => $nitems
);

$query = new WP_Query( $args );
if ($query->have_posts()) { ?>
	<?php
	while ($query->have_posts()) : $query->the_post();
		?>
		<div class="col-md-4">
			<div class="event-card">
				<div class="row">
					<div class="col"><?= get_the_title();?></div>
				</div>


				<?php

				$time =  get_post_meta( get_the_id(), 'event-date', true);
				echo date('d-m-Y',$time);?>

				<?= get_post_meta( get_the_id(), 'event-summary', true); ?>
				<?= get_post_meta( get_the_id(), 'event-location', true); ?>
			</div>
		</div>

	<?php


	endwhile;


}
wp_reset_query();

?>

