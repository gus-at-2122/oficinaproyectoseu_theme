<?php
$terms = get_the_terms(get_the_ID(), 'ope_scope');
$terms_bene = get_the_terms(get_the_ID(), 'ope_beneficiario');

?>
<div class="anno-snippet card <?= $terms[0]->slug ?>">

	<div class="card-header">
		<img src="<?= the_post_thumbnail_url() ?>" alt="" class="img-fluid">
	</div>

	<div class="card-post-header">
		<div class="target <?= $terms_bene[0]->slug ?>"><span class="display-4"><?= $terms_bene[0]->name ?></span></div>
		<div class="title"><span class="display-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		</div>
	</div>

	<div class="card-body">
		<strong><?= carbon_get_post_meta(get_the_ID(), 'ope_short_desc'); ?></strong>

		<div class="meta">
			<span class="label text-uppercase">Beneficiarios:</span>
			<?php
			$beneficiarios = carbon_get_post_meta(get_the_ID(), 'ope_beneficiarios');

			foreach ($beneficiarios as $beneficiario) { ?>
				<span class="d-inline-block my-1"><?= $beneficiario['title'] ?></span>
				<?php

			}
			?>

		</div>
		<div class="meta">
			<span
				class="label text-uppercase">Fechas:</span><span><?= carbon_get_post_meta(get_the_ID(), 'ope_fechas'); ?></span>
		</div>
		<div class="meta">

			<?php
			$links = carbon_get_post_meta(get_the_ID(), 'ope_links');

			foreach ($links as $link) {
				?>
				<span class="label d-block"><i class="fas fa-link mr-2"></i><a
						href="<?= $link['link'] ?>" target="_blank"><?= $link['title'] ?></a></span>
				<?php
			}
			?>

		</div>

		<div class="meta">
			<span class="label"><a href="tel:+34<?= carbon_get_theme_option('ope_phone') ?>">Necesitas ayuda? ¡Llámanos! <i
						class="fas fa-phone"></i> <?= carbon_get_theme_option('ope_phone') ?></a></span>
		</div>

		<?php
		$opcional = carbon_get_post_meta(get_the_ID(), 'ope_mensaje_opcional');

		if (!empty($opcional)) {
			?>
			<div class="meta">
			<strong class="opcional">* <?= carbon_get_post_meta(get_the_ID(), 'ope_mensaje_opcional'); ?></strong>
			</div>
			<?php
		}
		?>

	</div>

</div>
