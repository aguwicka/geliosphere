<?php
/**
 *politics
 */

require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;

get_header(); ?>
<style>
	body{
		background-image: none;
		background-color: #000;
	}
	.footer-wrap-fixed{
		z-index: 2;
	}
</style>
<div class="wrapper" id="politics-wrapper">
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

	<div class="politics__img-star">
		<img src="<?php echo get_template_directory_uri(); ?>/img/politics-page/stars.jpg" alt="">
	</div>

	<div class="politics__img-star2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/politics-page/stars2.jpg" alt="">
	</div>

	<main class="site-main" id="main">
		<div class="politics-page">
			
			<div class="container">

				<h1 class="frontpage-main__title politics__title"><?php echo get_the_title(); ?></h1>
				<div class="politics__content"><?php the_content(); ?></div>

			</div><!-- .container -->
		</div><!-- .politics__page -->
	</main><!-- #main -->


</div><!-- .wrapper -->

<?php get_footer(); ?>