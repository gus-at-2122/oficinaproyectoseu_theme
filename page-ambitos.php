<?php
/**
 * Layout: views/layouts/app.php
 *
 * This is the template that is used for displaying all pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OpeGandia
 *
 * Template Name: Ambitos
 *
 */

?>
<?php while (have_posts()) : ?>
	<?php the_post(); ?>
	<div <?php post_class(); ?>>


		<?php \OpeGandia::render('views/partials/intro'); ?>
		<?php $terms = get_terms(array(
			'taxonomy' => 'ope_scope',
			'hide_empty' => false,
		)); ?>
		<section id="ambitos_featured">
			<div class="row align-items-center row-eq-height">
				<div class="col-md-8 offset-2">
					<div class="row align-items-center">
						<div class="col-md">
							<div class="display-1">Tipos de <br>Ayuda</div>
						</div>

						<?php
						foreach ($terms as $term) {
							?>
							<div class="col-md align-items-center ova-wrapper">
								<div class="ova-details ova-linear-gradient">
									<div class="row align-items-center">
										<div class="col "><div class="title"><?= $term->name ?></div></div>
										<div class="col px-0 m-0"><div class="pointered"></div></div>
									</div>

								</div>
							</div><?php
						}
						?>

					</div>
				</div>
			</div>
		</section>
		<section id="ambitos">
			<div class="container-fluid px-0 position-relative">
				<div class="row my-1 mx-0">
					<div class="col-md-10 offset-md-1">

						<?php


						foreach ($terms as $scope) {

							$args = array(
								'post_type' => 'ope_announcement',

								'tax_query' => array(
									array(
										'taxonomy' => 'ope_scope',
										'field' => 'term_id',
										'terms' => $scope->term_id,
									),
								),
							);

							?>
							<div class="row my-4">
								<div class="col-md">
									<h2 class="display-2"><a
											href="<?= get_term_link($scope->term_id) ?>"><?= $scope->name ?></a></h2>
								</div>
							</div>

							<div class="row mb-5">
								<?php
								$query = new WP_Query($args);
								if ($query->have_posts()) { ?>
									<?php
									while ($query->have_posts()) : $query->the_post();
										?>
										<div class="col-md-4">
											<?php \OpeGandia::render('views/partials/announcement'); ?>
										</div>
									<?php endwhile; ?>

									<?php
								}
								wp_reset_query(); ?>
							</div>


							<?php
						}
						?>

					</div>

				</div>
			</div>
	</div>
	</section>
	</div>
<?php endwhile; ?>
