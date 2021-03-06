<?php
/**
 * Single comment partial.
 *
 * @package OpeGandia
 */

?>
<li @php comment_class() @endphp id="li-comment-@php comment_ID() @endphp">
	<div id="comment-@php comment_ID() @endphp" class="comment">
		<div class="comment__author vcard">
			{!! get_avatar( $comment, 48 ) !!}
			@php comment_author_link() @endphp
			<span class="comment__says">{{ __( 'says:', 'ope_gandia' ) }}</span>
		</div>

		@if ('0' === $comment->comment_approved)
			<em class="comment__moderation-notice">{{ __( 'Your comment is awaiting moderation.', 'ope_gandia' ) }}</em><br />
		@endif

		<div class="comment__meta">
			<a href="{{ esc_url( get_comment_link( $comment->comment_ID ) ) }}">
				{{-- translators: comment date and time --}}
				{{ sprintf( __( '%1$s at %2$s', 'ope_gandia' ), get_comment_date(), get_comment_time() ) }}
			</a>

			@php edit_comment_link( esc_html__( '(Edit)', 'ope_gandia' ), '  ', '' ) @endphp
		</div>

		<div class="comment__text">
			@php comment_text() @endphp
		</div>

		<div class="comment__reply">
			@php
			comment_reply_link(
				array_merge(
					$args,
					[
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
					]
				)
			);
			@endphp
		</div>
	</div>
{{-- closing </li> tag is added by WordPress. --}}
