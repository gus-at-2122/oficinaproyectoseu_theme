<?php $terms = get_terms(array(
	'taxonomy' => 'ope_scope',
	'hide_empty' => false,
)); ?>
<section id="ambitos_featured" >
	<div class="row align-items-center row-eq-height">
		<div class="col-md-10 offset-md-1" data-aos="fade-down"	data-aos-easing="linear" data-aos-duration="1500">
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
