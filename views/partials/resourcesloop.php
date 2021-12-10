
<?php


	$args = array(
		'orderby' => 'date',
		'order'   => 'DESC',
		'post_type' => 'ope_resource',
		'posts_per_page' => $nitems
	);

	$query = new WP_Query( $args );

	if ($query->have_posts()) { ?>
		<?php
		while ($query->have_posts()) : $query->the_post();
			?>
			<div class="col-md-6">
				<div class="resource-card">
					<a href="<?php echo carbon_get_the_post_meta( 'url' ); ?>">

						<div class="row align-items-center">
							<div class="col-10">
								<?= get_the_title();?>
							</div>
							<div class="col-2">
								<img src="http://placehold.it/50x50" alt="" class="img-fluid">
							</div>
						</div>



					</a>
				</div>
			</div>

		<?php
		endwhile;
	}
	wp_reset_query();

?>

