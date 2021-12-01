<?php
/**
 * Displays the post date/time, author, tags, categories and comments link.
 *
 * Should be called only within The Loop.
 *
 * It will be displayed only for post type "post".
 *
 * @package OpeGandia
 */

if ( get_post_type() !== 'post' ) {
	return;
}
?>
<div class="article__meta">
	<p>
		<?php
		the_time( 'F jS, Y ' );
		/* translators: post author attribution */
		echo esc_html( sprintf( __( 'by %s', 'ope_gandia' ), get_the_author() ) );
		?>
	</p>

	<p>
		<?php
		esc_html_e( 'Posted in ', 'ope_gandia' );
		the_category( ', ' );
		if ( comments_open() ) {
			echo '<span> | </span>';
			comments_popup_link( __( 'No Comments', 'ope_gandia' ), __( '1 Comment', 'ope_gandia' ), __( '% Comments', 'ope_gandia' ) );
		}
		?>
	</p>

	<?php the_tags( '<p>' . __( 'Tags:', 'ope_gandia' ) . ' ', ', ', '</p>' ); ?>
</div>
