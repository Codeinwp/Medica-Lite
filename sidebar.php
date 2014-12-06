<?php
/**
 *  The template for displaying Sidebar.
 *
 *  @package ThemeIsle.
 */
?>
<aside id="sidebar-right">
<?php
if ( is_dynamic_sidebar( 'general-sidebar' ) ) {
	dynamic_sidebar( 'general-sidebar' );
} else {
	echo '<div class="widget">';
	_e( 'The sidebar is not active.', 'medica_lite' );
	echo '</div>';
}
?>
</aside><!--/aside #sidebar-right-->