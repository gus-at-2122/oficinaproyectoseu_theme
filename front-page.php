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


		<div class="parallax-window" data-parallax="scroll" data-image-src="http://placehold.it/1920x1080"></div>

		<div class="container-fluid px-0">
			<div class="row my-5 mx-0">
			<div class="col-md-10 offset-md-1">
				<div class="page__content">

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
							slidesToShow: 5,
							centerMode: true,
							arrows:false,
							autoplay:true
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
