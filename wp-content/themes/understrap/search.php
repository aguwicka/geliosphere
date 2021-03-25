<?php
require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;
/**
 * The template for displaying search results pages
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>
<div class="wrapper" id="search-wrapper">
	<?php if ( !$detect->isMobile() ) : ?>
		<div class="frontpage-circle-wrap">
			<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
			<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
			<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
			<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
			<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
		</div><!-- .frontpage-circle-wrap -->

		<div class="frontpage-circle-wrap--two">
			<img class="frontpage-circle-1--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
			<img class="frontpage-circle-1-icon--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
			<img class="frontpage-circle-2--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
			<img class="frontpage-circle-3--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
			<img class="frontpage-circle-3-icon--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
		</div><!-- .frontpage-circle-wrap -->
	<?php endif; ?>

	<div class="container" id="content" tabindex="-1">

		<div class="row">
			<div class="col">

				<main class="site-main" id="main">

					<?php if ( have_posts() ) : ?>


						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'Total search results', 'understrap' ); ?> <?php echo '<span class="search-query">"' . get_search_query() . '"</span>'; ?><sup class="search-query"><?php $search=new WP_Query("s=$s&showposts=-1"); echo $search->post_count; ?></sup></h1>

						</header><!-- .page-header -->

						<div class="footer-search-wrap"><?php get_search_form(); ?></div>

						<?php /* Start the Loop */ ?>
						<?php
						while ( have_posts() ) :
							the_post();

						/*
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
					endwhile;
					?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->

				<div class="search-pagination">
					<!-- The pagination component -->
					<?php understrap_pagination(); ?>
				</div>
				
			</div><!-- .col -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php
get_footer();
