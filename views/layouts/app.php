<?php
/**
 * Base layout.
 *
 * @link https://docs.wpemerge.com/#/framework/views/layouts
 *
 * @package OpeGandia
 */

\OpeGandia::render( 'header' );

if ( ! is_singular() ) {
	ope_gandia_the_title( '<h2 class="post-title">', '</h2>' );
}

\OpeGandia::layoutContent();


\OpeGandia::render( 'footer' );
