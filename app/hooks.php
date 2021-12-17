<?php
/**
 * Declare any actions and filters here.
 * In most cases you should use a service provider, but in cases where you
 * just need to add an action/filter and forget about it you can add it here.
 *
 * @package OpeGandia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// phpcs:ignore
// add_action( 'some_action', 'some_function' );
/**
 * Registeramos Custom Navigation Walker
 */



/*Registrando el menú*/
register_nav_menus( array(
	'primary' => __( 'Menú principal', 'WPB4' ),
) );


function custom_widget_featured_image() {
	global $post;

	echo tribe_event_featured_image( $post->ID, 'thumbnail' );
}
add_action( 'tribe_events_list_widget_before_the_event_title', 'custom_widget_featured_image' );


