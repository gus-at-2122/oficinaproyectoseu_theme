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

?>
@if ( get_post_type() === 'post' )
	<div class="article__meta">
		<p>
			{{ get_the_time( 'F jS, Y ' ) }}
			{{-- translators: post author attribution --}}
			{{ sprintf( __( 'by %s', 'ope_gandia' ), get_the_author() ) }}
		</p>

		<p>
			{{ __( 'Posted in ', 'ope_gandia' ) }}
			@php the_category( ', ' ) @endphp
			@if (comments_open())
				<span> | </span>
				@php comments_popup_link( __( 'No Comments', 'ope_gandia' ), __( '1 Comment', 'ope_gandia' ), __( '% Comments', 'ope_gandia' ) ) @endphp
			@endif
		</p>

		@php the_tags( '<p>' . __( 'Tags:', 'ope_gandia' ) . ' ', ', ', '</p>' ) @endphp
	</div>
@endif
