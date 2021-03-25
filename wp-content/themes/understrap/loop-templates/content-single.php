<?php
require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="single-archive__post" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="single-archive__main">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
						}
						?>

						<h1 class="frontpage-main__title single-archive__title"><?php echo get_the_title(); ?></h1>

					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->

			<div class="single-archive__shortcode-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/custom-archive/main.jpg)">

				<div class="container">
					<div class="row">
						<div class="col-12">
							
							<?php 
							$images = get_field('gallery-post');
							$size = 'full'; 
							if( $images ): 
								$allimages = count($images); 
								$count=1;?>

								<div class="single-products-page__gallery-wrap">
									<?php foreach( $images as $image): 
										echo ($count==1) ? '<div class="owl-item">': '';
										echo ($count==2) ? '<div class="single-products-page__gallery-thumb-wrap owl-carousel owl-theme">': '';
										?>
										<a class="single-products-page__gallery-item single-products-page__gallery-item--<?php echo $count; ?>" href="<?php echo esc_url($image['url']); ?>">
											<img src="<?php echo esc_url($image['url']); ?>" alt=""/>
										</a>
										<?php 
										echo ($count==1) ? '</div>': '';
										echo ($count==$allimages) ? '</div>': '';
										$count++;
									endforeach; ?>
									
								<?php endif; ?>
							</div><!-- .single-products-page__gallery-wrap -->

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- .single-products-page__shortcode-wrap -->


			<div class="single-archive__content-wraper">
				<?php if ( !$detect->isMobile() ) : ?>

					<div class="airship-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/airship.png" alt="">
					</div>

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

					<div class="airship-icon--two">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/airship.png" alt="">
					</div>

					<div class="airship-icon--three">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/airship.png" alt="">
					</div>

				<?php endif; ?>

				<div class="container">
					<div class="row">
						<div class="col-12">

							<div class="single-archive__content-wrap">
								<?php the_content(); ?>
							</div>

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .single-archive__content-wraper -->
		</div><!-- .single-archive__main -->

	</header><!-- .entry-header -->

</article><!-- #post-## -->
