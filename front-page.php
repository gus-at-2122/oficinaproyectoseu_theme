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
	<div <?php post_class(); ?>>

		<div class="container-fluid mx-0 px-0">
			<div class="parallax-window" data-parallax="scroll" data-image-src="http://placehold.it/1920x1080">
				<div class="row align-items-center h-100 mx-0">
					<div class="col-md-10 offset-md-1 d-flex align-items-center">
						<h1 class="align-middle">Lorem ipsum dolor sit amet.</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid px-0">
			<div class="row my-1 mx-0">
			<div class="col-md-10 offset-md-1">
				<div class="page__content">


					<section>
						<div class="row">
							<div class="col-md my-5">
								<div class="ova-details ova-linear-gradient">
									<div class="title">End</div>
									<div class="desc">Feb 10, 2022 (9:00AM GMT)</div>
								</div>
							</div>
							<div class="col-md my-5">
								<div class="ova-details ova-linear-gradient">
									<div class="title">End</div>
									<div class="desc">Feb 10, 2022 (9:00AM GMT)</div>
								</div>
							</div>
							<div class="col-md my-5">
								<div class="ova-details ova-linear-gradient">
									<div class="title">End</div>
									<div class="desc">Feb 10, 2022 (9:00AM GMT)</div>
								</div>
							</div>
							<div class="col-md my-5">
								<div class="ova-details ova-linear-gradient">
									<div class="title">End</div>
									<div class="desc">Feb 10, 2022 (9:00AM GMT)</div>
								</div>
							</div>
							<div class="col-md my-5">
								<div class="ova-details ova-linear-gradient">
									<div class="title">End</div>
									<div class="desc">Feb 10, 2022 (9:00AM GMT)</div>
								</div>
							</div>

						</div>
					</section>

					<div class="col-md-12 ">
						<div class="variable-width row">
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 text-center">
								<img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
							</div>
						</div>
					</div>




					<script>
						$('.variable-width').slick({
							dots: false,
							infinite: true,
							speed: 300,
							slidesToShow: 3,
							centerMode: true,
							arrows:false,
							autoplay:true,
							responsive: [
								{
									breakpoint: 1024,
									settings: {
										slidesToShow: 3,
										slidesToScroll: 3,
										infinite: true,
										dots: true
									}
								},
								{
									breakpoint: 600,
									settings: {
										slidesToShow: 2,
										slidesToScroll: 2
									}
								},
								{
									breakpoint: 480,
									settings: {
										slidesToShow: 1,
										slidesToScroll: 1
									}
								}

							]
						});

					</script>


				<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
							<div class="col-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore libero non odio optio rem. Exercitationem, provident, velit. Dignissimos doloremque excepturi ipsam ipsum laborum libero maiores, nostrum perspiciatis sed voluptatibus.</div>
						</div>
					</section>



					<?php \OpeGandia::render( 'views/partials/pagination' ); ?>
				</div>
			</div>
		</div>
		</div>

	</div>
<?php endwhile; ?>
