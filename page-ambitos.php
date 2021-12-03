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
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<div <?php post_class(); ?>>

		<div class="page__content">


		<?php
			$terms = get_terms( array(
			'taxonomy' => 'ope_scope',
			'hide_empty' => false,
			) );


			foreach ($terms as $scope) {
				$args = array(
					'post_type' => 'ope_announcement',
					'tax_query' => array(
						array(
							'taxonomy' => 'ope_scope',
							'field'    => 'term_id',
							'terms'    => $scope->term_id,
						),
					),
				);
				$query = new WP_Query($args);

				if ( $query->have_posts() ){ ?>
				<p><?php echo $scope->name ; ?></p>
				<?php
					while($query -> have_posts()) : $query -> the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content(); ?></p> <?php
					endwhile;

				}




				wp_reset_query() ;
			}

		?>
		</div>
	</div>
<?php endwhile; ?>
