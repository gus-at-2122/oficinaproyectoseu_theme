<?php
/**
 * Theme header partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OpeGandia
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<div class="container-fluid px-0">
		<?php ope_gandia_shim_wp_body_open(); ?>

<!--
		<nav>
			<div class="float-panel" data-top="0" data-scroll="500">
				<div style="text-align:right;">
					<a href="#" style="float:left;">
						<i class="fa fa-gg"></i>
						<em style="font:bold 20px Verdana, Arial;letter-spacing:1px;">OPEGANDIA</em>
					</a>
					<a href="#">Free trial</a>
					<a href="#">Subscribe</a>
					<a href="#">Services</a>
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
			</div>
		</nav>-->


			<div class="float-panel" data-top="0" data-scroll="500">
				<div class="row mx-0">
					<div class="col-md-10 offset-md-1">
						<nav class="navbar navbar-expand-lg">
						<a class="navbar-brand" href="#">
							<img class="logo horizontal-logo img-fluid" src="http://placehold.it/300x30" alt="">
						</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>


							<?php
							wp_nav_menu( array(
								'theme_location'    => 'primary',
								'depth'             => 4,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'navbarSupportedContent',
								'menu_class'        => 'nav navbar-nav ml-auto',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
							?>


						</nav>
					</div>
				</div>


			</div>

