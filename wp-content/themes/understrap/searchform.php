<?php
/**
 * The template for displaying search forms
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
	<div class="search-group">
		<input class="search-form" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
		<span class="search-group-append">
			<button class="search-group-append__btn" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search fa-lg"></i></button>
		</span>
	</div>
</form>
