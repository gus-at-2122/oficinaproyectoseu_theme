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
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<div>
		<?php \OpeGandia::render('views/partials/intro');?>

		<?php \OpeGandia::render('views/partials/ambitosfeatured');?>


		<section id="quien" >
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="display-2">¿Quién puede beneficiarse de las ayudas Europeas?</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row align-items-center mb-3">
								<div class="col-md text-center text-md-left" >
									<img src="http://placehold.it/100x100" alt="" class="img-fluid">
								</div>
								<div class="col-md-10 text-center text-md-left">
									<p>Todas aquellas personas, empresas y entidades que presentan proyectos de modernización, especialmente hacia la transición verde y digital, y que se ajusten a los objetivos y programas que financia la Unión Europea.</p>
								</div>
							</div>
							<div class="row py-5">
								<div class="col-md text-center text-md-left">
									<img src="http://placehold.it/100x100" alt="" class="img-fluid">
								</div>
								<div class="col-md-10 text-center text-md-left">
									<p>Empresas, autónomos, asociaciones o entidades de sectores como
										el comercio, turismo, agricultura y pesca, industria, ocio y tiempo libre,
										educación, servicios tecnológivos y de atención a las personas... todos
										pueden optar a estas ayudas.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="servicios">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="display-2">Servicios a la ciudadanía y empresas</h2>
						</div>
					</div>
					<div class="row justify-content-around py-5" data-aos="fade-down"					 data-aos-easing="linear"						 data-aos-duration="1500">
						<div class="col-md-5">
							<div class="row align-items-center ">
								<div class="col-md-10 text-right">
									<h3 class="display-3">Información y divulgación</h3>
									<ul class="m-0 p-0">
										<li>- De la documentación y formularios relacionados con la UE.</li>
										<li>- De los resultados y buenas prácticas llevadas a cabo en el municipio.</li>
										<li>-De la información con especificación de las convocatorias, plazos y documentación.</li>

									</ul>
								</div>
								<div class="col-md text-center">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-2">
							<div class="row align-items-center">
								<div class="col-md-10 text-text order-1">
									<h3 class="display-3">Orientación y asesoramiento</h3>
									<ul class="m-0 p-0">
										<li>A las personas y empresas gandienses que puedan beneficiarse de las ayudas, asesorándoles en los procesos administrativos de la tramitación y gestión.</li>
									</ul>
								</div>
								<div class="col-md order-0 text-center">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-around py-5" data-aos="fade-down"	data-aos-easing="linear"	 data-aos-duration="1500">
						<div class="col-md-5">
							<div class="row align-items-center ">
								<div class="col-md-10 text-right">
									<h3 class="display-3">Dinamización y eventos</h3>
									<ul class="m-0 p-0">
										<li>Gandia contará con una agenda de eventos para la formación en materia de proyectos europeos propia y enlazará con eventos seleccionados que realicen otras entidades:</li>
										<li>- Cursos, seminarios y actividades divulgativas</li>

									</ul>
								</div>
								<div class="col-md text-center">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-2">
							<div class="row align-items-center">
								<div class="col-md-10 text-text order-1">
									<h3 class="display-3">Intermediación...</h3>
									<ul class="m-0 p-0">
										<li>- Para conectar las personas y grupos de interés con los organismos correspondientes en materia de financiación europea.</li>
										<li>- Se propiciará el intercambio de experiencias y conocimientos en redes locales, regionales y nacionales</li>
									</ul>
								</div>
								<div class="col-md order-0 text-center">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="eventos-recursos">
			<div class="row justify-content-center">
				<div class="col-md text-center">
					<h3 class="display-2 color-brand-secondary">Eventos</h3>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="row justify-content-center">
						<?php echo do_shortcode("[ecs-list-events]");?>


					</div>

				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="col-md-12 text-center">
						<h3 class="display-2 color-brand-secondary">Recursos</h3>
					</div>
					<div class="row">
						<?php $nitems= 1; ?>
						<?php \OpeGandia::render('views/partials/resourcesloop',['nitems'=>$nitems]);?>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php endwhile; ?>
