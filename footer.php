<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OpeGandia
 */

?>


<footer>
	<div id="contact-footer">
		<div class="container-fluid px-0">
			<div class="row mx-0">
			<div class="col-md-10 offset-md-1">
				<div class="row align-items-end py-5" >
					<div class="col-md-3 text-center align-items-center" data-aos="fade-up"					 data-aos-easing="linear"						 data-aos-duration="500">
						<h4 class="display-3">Atención <br>personalizada</h4>
						<span class="as_astrong ">Te atenderemos con cita previa</span>
						<img src="<?= \OpeGandia::core()->assets()->getAssetUrl( 'images/info.png' )	?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-3  text-center align-items-center" data-aos="fade-up"					 data-aos-easing="linear"						 data-aos-duration="500">
						<h4 class="display-3">Llámanos</h4>
						<span class="as_astrong">Si tienes dudas <span
								class="d-inline-block"><?= carbon_get_theme_option('ope_phone') ?></span></span>
						<img src="<?= \OpeGandia::core()->assets()->getAssetUrl( 'images/phone.png' )	?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-3  text-center align-items-center" data-aos="fade-up"					 data-aos-easing="linear"						 data-aos-duration="500">
						<h4 class="display-3">¡Escríbenos!</h4>
						<span class="as_astrong ">opegandia@gandia.org</span>
						<img src="<?= \OpeGandia::core()->assets()->getAssetUrl( 'images/email.png' )	?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-3  text-center align-items-center" data-aos="fade-up"					 data-aos-easing="linear"						 data-aos-duration="500">
						<h4 class="display-3">¿Dónde estamos?</h4>
						<span class="as_astrong ">C/ Fundación Vicente Ferrer</span>
						<img src="<?= \OpeGandia::core()->assets()->getAssetUrl( 'images/location.png' )	?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<div id="cta-footer">
		<div class="row py-4 m-0 text-center">
			<div class="col-md-6 offset-md-3">
				<div class="row">
					<div class="col-12">
						<div class="display-3">Buscar financiación</div>
					</div>
					<div class="col-12 py-4">
						<div class="gradient_bar"></div>
					</div>
					<div class="col-12">
						<div class="display-3">+ Sobre Fondos Europeos</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="post-footer">

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
