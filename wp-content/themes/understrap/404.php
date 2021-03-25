<?php
require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<style>
	.footer-wrap-fixed{
		position: absolute;
	}
	body{
		background-image: url('<?php echo get_template_directory_uri(); ?>/img/404/main.jpg');
	}
	@media only screen and (max-width: 1200px) {
		body{
			background-image: none;
			background-color: #000;
		}
		.footer-wrap-fixed{
			position: static;
		}
	}
</style>

<div class="wrapper" id="error-404-wrapper">

	<?php if ( !$detect->isMobile() ) : ?>
		<div class="frontpage-circle-wrap">
			<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
			<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
			<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
			<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
			<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
		</div><!-- .frontpage-circle-wrap -->
	<?php endif; ?>
	<div class="error-404-wrap">
		<div class="error-404 not-found">

			<?php if ( !$detect->isMobile() ) : ?>
				<div class="error-404__img-wrap">
					<img class="error-404__img" src="<?php echo get_template_directory_uri(); ?>/img/404/astronaut.png" alt="">
				</div>
			<?php endif; ?>

			<div class="container">

				<div class="page-header error-404__inner">

					<h1 class="page-title"><?php esc_html_e('Houston, we have a problem', 'understrap' ); ?></h1>
					<span class="page-title__number"><?php esc_html_e('404', 'understrap' ); ?></span>
					<span class="page-title__text"><?php esc_html_e('You boldly walked to where no person had appeared before.', 'understrap' ); ?></span>
					<a class="page-title__btn btn" href="<?php echo home_url(); ?>"><?php esc_html_e('To the main page', 'understrap' ); ?></a>

				</div><!-- .page-header -->

			</div><!-- .container -->

		</div><!-- .error-404 -->
	</div><!-- .error-404-wrap -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
