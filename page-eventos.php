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
 * Template Name: Eventos y Recursos
 *
 */
?>

<div class="container">
	<section id="eventos">
		<div class="row">
			<div class="col-md">
				<h2>Eventos</h2>
			</div>
		</div>
		<div class="row">
			<?php the_content();?>
		</div>
	</section>

	<section id="eventos">
		<div class="row">
			<div class="col-md">
				<h2>Recursos</h2>
			</div>
		</div>

		<div class="row">
			<?php \OpeGandia::render('views/partials/resourcesloop');?>
		</div>
	</section>
</div>

