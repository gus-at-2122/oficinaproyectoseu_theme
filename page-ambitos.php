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
		<div class="container-fluid px-0 position-relative" style="z-index:-1">
			<div class="row my-1 mx-0">
				<div class="col-md-10 offset-md-1">

						<?php
						$terms = get_terms(array(
							'taxonomy' => 'ope_scope',
							'hide_empty' => false,
						));

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
							<div class="row">
								<div class="col-md">
									<h2 class="display-2"><a href="<?= get_term_link($scope->term_id)?>"><?= $scope->name?></a></h2>
								</div>
							</div>
							<div class="row">
								<?php
								$query = new WP_Query($args);
								if ($query->have_posts()) { ?>
									<?php
									while ($query->have_posts()) : $query->the_post();
										?>
										<div class="col-md-3">
										<?php \OpeGandia::render('views/partials/announcement');
										endwhile;?>
									</div>
								<?php
								}
								wp_reset_query();?>
							</div>


						<?php
						}
						?>

					</div>

				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
