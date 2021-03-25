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

<div class="wrapper archive-wrapper-products" id="archive-wrapper">

				<?php if ( !$detect->isMobile() ) : ?>
				<div class="frontpage-circle-wrap">
					<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
					<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
					<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
					<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
					<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
				</div><!-- .frontpage-circle-wrap -->
			<?php endif; ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		
		<main class="site-main" id="main">
			<div class="archive-page">
				<div class="archive-page__text-wrap">
					<h1 class="archive-page__title"><?php echo post_type_archive_title();?></h1>
					<p class="archive-page__text"><?php echo get_field('archive-products-text',16); ?></p>
				</div><!-- .archive-page__text-wrap -->

				<div class="archive-page__items-wrap">

					<div class="row justify-content-center">
						<?php	
						$terms = get_terms( [
							'taxonomy' => 'categoria',
							'hide_empty' => false,
							'orderby' => 'ID',
							'order'   => 'DESC',
						] );
						if ($terms) { 

							foreach($terms as $term){?>   

								<div class="col-6 col-md-4">
									<?php if(get_field('category_img',$term)): ?>
										<div style="background-image: url(<?php echo get_field('category_img',$term); ?>)" class="archive-page_item">
											<a class="archive-page_item-link" href="<?php echo get_term_link( $term ) ?>" >
												<span class="archive-page_item-title"><?php echo ($term->name) ?></span>
											</a>
										</div><!-- .archive-page_item -->
										<?php else : ?>
											<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/no-photo.png)" class="archive-page_item">
												<a class="archive-page_item-link" href="<?php echo get_term_link( $term ) ?>" >
													<span class="archive-page_item-title"><?php echo ($term->name) ?></span>
												</a>
											</div><!-- .archive-page_item -->
										<?php endif; ?>
									</div><!-- .col -->
								<?php }
								wp_reset_postdata();
								?>
								<?php
							} else {
								get_template_part( 'loop-templates/content', 'none' );
							}
							?>

						</div><!-- .row -->

					</div><!-- .archive-page__items-wrap -->

				</div><!-- .archive-page -->

			</main><!-- #main -->

		</div><!-- #content -->

	</div><!-- #archive-wrapper -->

	<?php
	get_footer();
