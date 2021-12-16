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
		<section id="ambitos_featured">
			<div class="row">
				<div class="col-md-8 offset-2">
					<div class="row">
						<div class="col-md"><div class="display-1">Líneas de <br>Trabajo</div></div>
						<div class="col-md">
							<div class="ova-details ova-linear-gradient">
								<div class="title">Servicio intra-municipal en materia de <strong>Fondos Europeos</strong></div>
							</div>
						</div>
						<div class="col-md">
							<div class="ova-details ova-linear-gradient">
								<div class="title">End</div>
								<div class="desc">Feb 10, 2022 (9:00AM GMT)</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="quien">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="display-2">¿Quién puede beneficiarse de las ayudas Europeas?</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row align-items-center">
								<div class="col-md text-center text-md-right" >
									<img src="http://placehold.it/100x100" alt="" class="img-fluid">
								</div>
								<div class="col-md-10 text-center text-md-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus excepturi, qui. Doloremque et impedit molestiae quaerat quidem. A ad corporis delectus eligendi esse iure nesciunt odit placeat, sunt temporibus veritatis!</p>
								</div>
							</div>
							<div class="row py-5">
								<div class="col-md text-center text-md-right">
									<img src="http://placehold.it/100x100" alt="" class="img-fluid">
								</div>
								<div class="col-md-10 text-center text-md-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus excepturi, qui. Doloremque et impedit molestiae quaerat quidem. A ad corporis delectus eligendi esse iure nesciunt odit placeat, sunt temporibus veritatis!</p>
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
					<div class="row justify-content-around py-5">
						<div class="col-md-5">
							<div class="row align-items-center ">
								<div class="col-md-10 text-right">
									<h3 class="display-3">Información y divulgación</h3>
									<ul class="m-0 p-0">
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
									</ul>
								</div>
								<div class="col-md">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-2">
							<div class="row align-items-center">
								<div class="col-md-10 text-text order-1">
									<h3 class="display-3">Información y divulgación</h3>
									<ul class="m-0 p-0">
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
									</ul>
								</div>
								<div class="col-md order-0">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-around py-5">
						<div class="col-md-5">
							<div class="row align-items-center ">
								<div class="col-md-10 text-right">
									<h3 class="display-3">Información y divulgación</h3>
									<ul class="m-0 p-0">
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
									</ul>
								</div>
								<div class="col-md">
									<img src="http://placehold.it/50x50" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-md-5 offset-2">
							<div class="row align-items-center">
								<div class="col-md-10 text-text order-1">
									<h3 class="display-3">Información y divulgación</h3>
									<ul class="m-0 p-0">
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
									</ul>
								</div>
								<div class="col-md order-0">
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
						<?php
							$nitems = 2;
							\OpeGandia::render('views/partials/eventsloop',['nitems'=>$nitems]);
						?>
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
