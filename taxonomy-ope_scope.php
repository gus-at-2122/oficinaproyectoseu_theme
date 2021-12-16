<?php
/**
 * Layout: views/layouts/app.php
 *
 * This is the template that is used for displaying all pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OpeGandia
 */

?>


<div <?php post_class(); ?>>
	<?php \OpeGandia::render('views/partials/intro');?>
	<section id="ambitos">
	<div class="container-fluid px-0">
		<div class="row my-1 mx-0">
			<div class="col-md-10 offset-md-1">
				<div class="row my-5">
					<div class="col-md">
						<h1 class="display-2"><?= single_term_title(); ?></h1>
					</div>
				</div>
				<div class="row">
					<?php
					$term = get_queried_object();
					$args = array(
						'post_type' => 'ope_announcement',
						'tax_query' => array(
							array(
								'taxonomy' => 'ope_scope',
								'field' => 'term_id',
								'terms' => $term->term_id,
							),
						),
					);


					$query = new WP_Query($args);
					if ($query->have_posts()) { ?>
						<?php
						while ($query->have_posts()) : $query->the_post();
							?>
							<div class="col-md-4">
							<?php \OpeGandia::render('views/partials/announcement');?>
							</div>
						<?php endwhile; ?>

						<?php
					}
					wp_reset_query(); ?>

				</div>


				<!--/*Otros ámbitos*/-->
				<div class="row">
					<h3 class="display-3">Otros ámbitos</h3>
				</div>
					<?php


						$terms = get_terms(array(
							'taxonomy' => 'ope_scope',
							'hide_empty' => false,
							'exclude'  => array($term->term_id),
						));

						foreach ($terms as $term){
							echo $term->name."<br>";
						}


					?>

				</div>

			</div>
		</div>
	</div>
	</section>
</div>
