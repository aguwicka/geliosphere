<?php
/**
 *parnership page
 */

require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;

get_header(); ?>
<style>
	body{
		background-image: url('<?php echo get_template_directory_uri(); ?>/img/partnership-page/main.jpg'); 
	}
</style>
<div class="wrapper" id="parnership-wrapper">

	<?php if ( !$detect->isMobile() ) : ?>
		<div class="frontpage-circle-wrap">
			<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
			<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
			<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
			<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
			<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
		</div><!-- .frontpage-circle-wrap -->
	<?php endif; ?>
	<?php if ( !$detect->isMobile() ) : ?>
		<div class="frontpage-circle-wrap--two">
			<img class="frontpage-circle-1--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
			<img class="frontpage-circle-1-icon--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
			<img class="frontpage-circle-2--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
			<img class="frontpage-circle-3--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
			<img class="frontpage-circle-3-icon--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
		</div><!-- .frontpage-circle-wrap -->
	<?php endif; ?>

	<div class="container">
		
		<main class="site-main" id="main">
			<div class="frontpage-main__text-wrap">
				<div class="frontpage-main__text-inner">
					<h1 class="frontpage-main__title"><?php echo get_the_title(); ?></h1>
					<p class="frontpage-main__text"><?php echo get_field('partnership-text'); ?></p>
					<div class="frontpage-main__partner-list">
						<?php $count=1; ?>
						<?php if(get_field('partnery')) : ?>
							<?php while(the_repeater_field('partnery')) : ?>
								<a target="_blank" class="frontpage-main__partner-link" href="<?php echo get_sub_field('partnership-link'); ?>">
									<img <?php echo $count==8 ? 'id="currenticon" class="lastimg"': ''; ?> src="<?php echo get_sub_field('partnership-img'); ?>" alt="">
								</a>
								<?php $count++; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- .frontpage-main__partner-list -->
					<div class="btn-wrap frontpage-main__btn-wrap">
						<a href="#currenticon" class="btn frontpage-main__btn yakor-btn"><?php esc_html_e( 'Show more', 'understrap' ); ?></a>
					</div>
				</div><!-- .frontpage-main__text-inner -->
			</div><!-- .frontpage-main__text-wrap -->
		</main><!-- #main -->

	</div><!-- .container -->

</div><!-- .wrapper -->

<?php get_footer(); ?>