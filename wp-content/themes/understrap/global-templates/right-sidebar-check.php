<?php
/**
 * Right sidebar check
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
if(false):
?>

</div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

<?php
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) {
	get_template_part( 'sidebar-templates/sidebar', 'right' );
}
endif;
