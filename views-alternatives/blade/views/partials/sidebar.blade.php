<?php
/**
 * Sidebar partial.
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @package OpeGandia
 */

?>
@php apply_filters( "wpemerge.partials.sidebar.hook", true ) && do_action('get_sidebar') @endphp
<div class="sidebar">
	<ul class="widgets">
		@php dynamic_sidebar( \OpeGandia::core()->sidebar()->getCurrentSidebarId() ) @endphp
	</ul>
</div>
