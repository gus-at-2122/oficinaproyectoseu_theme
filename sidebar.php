<?php
/**
 * Sidebar partial.
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @package OpeGandia
 */

?>
<div class="sidebar">
	<ul class="widgets">
		<?php dynamic_sidebar( \OpeGandia::core()->sidebar()->getCurrentSidebarId() ); ?>
	</ul>
</div>
