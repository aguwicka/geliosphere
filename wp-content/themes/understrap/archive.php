<?php
require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper custom-archive-page" id="archive-wrapper">
				<?php if (have_posts()):?>
				<?php if (!$detect->isMobile() ) : ?>
				<div class="frontpage-circle-wrap">
					<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
					<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
					<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
					<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
					<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
				</div><!-- .frontpage-circle-wrap -->
			<?php endif; ?>
			<?php endif; ?>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
						<h1 class="archive-page__title"><?php echo post_type_archive_title();?></h1>
					</header><!-- .page-header -->
					<div class="custom-archive-row">
						<div class="row">
							<?php
							while(have_posts()){the_post();
								get_template_part( 'loop-templates/content', get_post_format() );
							}
							?>
						</div><!-- .row -->
					</div><!-- .custom-archive -->
					<?php
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
