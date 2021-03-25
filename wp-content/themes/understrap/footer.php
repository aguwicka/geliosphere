<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="thankyouvacansy" class="zoom-anim-dialog mfp-hide popup popup-thankyou">
	<div class="thankyou__inner">
		<h2 class="thankyou__title"><?php echo the_field('opt-vacansy-title','option') ?></h2>
		<p class="thankyou__subtitle"><?php echo the_field('opt-vacansy-text','option') ?></p>
	</div>	
</div><!-- #thankyou -->
<div id="thankyouorder" class="zoom-anim-dialog mfp-hide popup popup-thankyou">
	<div class="thankyou__inner">
		<h2 class="thankyou__title"><?php echo the_field('opt-product-title','option') ?></h2>
		<p class="thankyou__subtitle"><?php echo the_field('opt-product-text','option') ?></p>
	</div>	
</div><!-- #thankyou -->
<div id="thankyou" class="zoom-anim-dialog mfp-hide popup popup-thankyou">
	<div class="thankyou__inner">
		<h2 class="thankyou__title"><?php echo the_field('opt-form-title','option') ?></h2>
		<p class="thankyou__subtitle"><?php echo the_field('opt-form-text','option') ?></p>
	</div>	
</div><!-- #thankyou -->

<div class="footer-wrap-fixed">

	<div class="container">
		<div id="wrapper-footer">
			<footer class="site-footer" id="colophon">

				<div class="footer-1-part">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/qrcode.png" alt="" class="custom-qrcode">
					</div>
					<div>
						<div class="footer-logo-wrap">
							<?php echo the_custom_logo(); ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/qrcode.png" alt="" class="custom-qrcode-mob">
						</div><!-- .footer-logo-wrap -->
						<div class="footer-icons-wrap">
							<a target="_blank"  href="<?php echo the_field('opt-twitter','option'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/twitter.png" alt="">
							</a>
							<a target="_blank"  href="<?php echo the_field('opt-instagram','option'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram.png" alt="">
							</a>
							<a target="_blank" href="<?php echo the_field('opt-youtube','option'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/youtube.png" alt="">
							</a>
							<a target="_blank"  href="<?php echo the_field('opt-facebook','option'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.png" alt="">
							</a>
						</div><!-- .footer-icons-wrap -->
					</div>
				</div><!-- .footer-1-part -->

				<div class="footer-2-part">
					<div class="footer-adress-wrap">
						<span class="footer-adress"><?php echo the_field('opt-adress','option'); ?></span>
					</div>
				</div><!-- .footer-2-part -->

				<div class="footer-3-part">
					<div class="footer-email-wrap">
						<a href="mailto:<?php echo the_field('opt-email'); ?>"><?php echo the_field('opt-email','option'); ?></a>
					</div>
					<div class="footer-phone-wrap">
						<a href="tel:<?php echo the_field('opt-phone'); ?>"><?php echo the_field('opt-phone','option'); ?></a>
					</div>
				</div><!-- .footer-3-part -->

				<div class="footer-4-part">
					<p class="footer-text-wrap"><?php esc_html_e( 'All rights reserved.', 'understrap' ); ?> <a href="<?php echo get_home_url() ?>/politika-konfidenczialnosti"><?php esc_html_e( 'Privacy Policy', 'understrap' ); ?></a></p>
					<div class="footer-search-wrap"><?php get_search_form(); ?></div>
				</div><!-- .footer-4-part -->
			</footer><!-- #colophon -->
		</div><!-- #wrapper-footer -->
	</div><!-- .container -->

	<div class="footer-bottom-bar">

		<div class="container">

			<div class="footer-bottom-bar__wrap">
				<p class="footer-bottom-bar__item--left"><?php esc_html_e( 'The site is under development and filling. Some sections may not be active.', 'understrap' ); ?></p>
				<p class="footer-bottom-bar__item--right"><?php esc_html_e( 'Site created by', 'understrap' ); ?>: <a target="_blank" href="https://appservice.by/">appservice.by</a></p>
			</div><!-- .footer-bottom-bar__wrap -->

		</div><!-- .container -->

	</div><!-- .footer-bottom-bar -->
</div><!-- .footer-wrap-fixed -->
<?php if((!is_front_page() && !is_page(10))):?>
<?php else:?>
</div><!-- .section-inner -->
</div><!-- .section -->
</div><!-- #frontpage-pagepiling -->
<?php endif;?>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>

