<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_style( 'pagepilling-styles', get_template_directory_uri() . '/libs/pagepilling/pagepilling.min.css', array(), 1 );

		wp_enqueue_style( 'magnific-styles', get_template_directory_uri() . '/libs/magnific-popup/magnific-popup.css', array(), 1 );

		wp_enqueue_style( 'animate-styles', get_template_directory_uri() . '/libs/animate/animate.min.css', array(), 1 );

		wp_enqueue_style( 'select-styles', get_template_directory_uri() . '/libs/custom-select/custom-select.css', array(), 1 );

		wp_enqueue_style( 'OwlCarousel-styles', get_template_directory_uri() . '/libs/OwlCarousel2-2.3.4/owl.carousel.min.css', array(), 1 );


		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );

		wp_enqueue_script( 'libs-scripts', get_template_directory_uri() . '/libs/libs.min.js', array(), 1, true );

		wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/common.js', array(), 1, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
