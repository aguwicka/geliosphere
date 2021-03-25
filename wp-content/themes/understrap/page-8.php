<?php
/**
 *vacansy
 */

require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;

get_header(); ?>
<style>
	body{
		overflow: hidden;
		position: relative;
		background-image: url('<?php echo get_template_directory_uri(); ?>/img/vacansy/main.jpg');
		background-color: #000;
		background-repeat: no-repeat;
		background-size: cover;
	}
	@media only screen and (max-height: 870px) {
		body{
			overflow: scroll;
		}
		.frontpage-circle-wrap{
			display: none !important;
		}
	}
	@media only screen and (max-width: 768px) {
		body{
			background-image: url('<?php echo get_template_directory_uri(); ?>/img/vacansy/main-mob.jpg');
			background-size: contain !important;
			background-repeat: no-repeat;
		}
	}
	.frontpage-circle-wrap{
		position: absolute;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		opacity: 1;
	}
	.frontpage-circle-2,
	.frontpage-circle-3,
	.frontpage-circle-3-icon{
		position: absolute;
		right: -200px;
		bottom: -200px;
	}
	.frontpage-circle-1,
	.frontpage-circle-1-icon{
		position: absolute;
		right: -240px;
		bottom: -240px;
	}
	.frontpage-circle-1{
		-webkit-animation:none;
		-moz-animation:none;
		animation:none ;
	}
	.frontpage-circle-1-icon{
		-webkit-animation:spinback 20s linear infinite;
		-moz-animation:spinback 20s linear infinite;
		animation:spinback 20s linear infinite;
	}
	.frontpage-circle-2{
		-webkit-animation:spin 10s linear infinite;
		-moz-animation:spin 10s linear infinite;
		animation:spin 10s linear infinite;
	}
	.frontpage-circle-3-icon{
		-webkit-animation:spinback 6s linear infinite;
		-moz-animation:spinback 6s linear infinite;
		animation:spinback 6s linear infinite;
	}
</style>
<div class="wrapper" id="vacansy-wrapper">

	<main class="site-main" id="main">
		<div class="vacansy-page">
			
			<div class="container">

				<h1 class="frontpage-main__title vacansy__title"><?php echo get_the_title(); ?></h1>
				<p class="frontpage-main__text vacansy__text"><?php echo get_field('vacansy-text'); ?></p>
				<p class="vacansy__text--middle"><?php echo get_field('vacansy-text--middle'); ?></p>
				<p class="vacansy__text--bottom"><?php echo get_field('vacansy-text--bottom'); ?></p>

				<div class="vacansy__btn-wrap">
					<a href="#vacansy" class="btn-popup btn vacansy__btn"><?php esc_html_e('Send resume', 'understrap' ); ?></a>
				</div>

			</div><!-- .container -->

			<?php if ( !$detect->isMobile() ) : ?>
				<div class="frontpage-circle-wrap">
					<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
					<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
					<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
					<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
					<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
				</div><!-- .frontpage-circle-wrap -->
			<?php endif; ?>

		</div><!-- .vacansy__page -->
	</main><!-- #main -->


</div><!-- .wrapper -->

<div id="vacansy" class="zoom-anim-dialog mfp-hide popup popup-order">
	<form id="formvacansy" class="single-products-popup__form form" enctype="multipart/form-data">
		<input name="place" type="hidden" value="отправка резюме">
		<input name="page" type="hidden" value="вакансия">
		<input type="hidden" name="utm" value="">

		<div class="row">
			<div class="col-12">
				<div class="single-products-popup__top-text-wrap">
					<span class="single-products-popup__top-title"><?php esc_html_e('CV sending form', 'understrap' ); ?></span>
					<p class="single-products-popup__top-text"><?php esc_html_e('Please fill out the form below and make sure the contact information is correct.After receiving your request, one of our staff will contact you shortly.', 'understrap' ); ?></p>
				</div>
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-6">

				<span class="single-products-popup__label form__label"><?php esc_html_e('Your data:', 'understrap' ); ?></span>

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="text" name="name" class="form__textfield" placeholder="<?php esc_html_e( 'Your name', 'understrap' ); ?>*" required="required">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="text" name="want_name_org_post" class="form__textfield" placeholder="<?php esc_html_e( 'Desired position in the company', 'understrap' ); ?>*" required="required">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="email" name="email" class="form__textfield" placeholder="<?php esc_html_e( 'Email', 'understrap' ); ?>">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="tel" name="phone" class="form__textfield" placeholder="<?php esc_html_e( 'Phone', 'understrap' ); ?>*" required="required">
				</div><!-- .form__fieldwrap -->

			</div><!-- .col-md-6 -->
			<div class="col-md-6">

				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Additional Information', 'understrap' ); ?></span>
				<div class="single-products-popup__fieldwrap form__fieldwrap last">
					<textarea name="textarea" class="form__textareafield" placeholder="<?php esc_html_e( 'Message', 'understrap' ); ?>"></textarea>
				</div><!-- .form__fieldwrap -->


				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Attach resume', 'understrap' ); ?></span>
				<div class="single-products-popup__uploadfile">
					<label class="label" for="attach_file"><span><?php esc_html_e( 'Select a file', 'understrap' ); ?></span></label>
					<span class="single-products-popup__size-text">Max 30 mb</span>
					<input type="file" id="attach_file" name="attach_file"  class="single-products-popup__inputfile form__inputfile" data-multiple-caption="<?php esc_html_e( 'Selected files', 'understrap' ); ?>: {count}" multiple style="visibility: hidden; height: 0;" />
					<ul class="file-ouput"></ul>
				</div>	

			</div><!-- .col-md-6 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-6">

				<div class="single-products-popup__captcha-wrap form__btn-wrap">
					<div class="g-recaptcha" data-sitekey="6LfmweEZAAAAAIkvAuF_ivtBUBst_vj0jetafin1" data-callback="correctCaptcha"></div>
				</div>

				<div class="single-products-popup__btn-wrap form__btn-wrap">
					<button type="submit" class="btn single-products-popup__btn form__btn"><?php esc_html_e('Send resume', 'understrap' ); ?></button>
				</div><!-- .single-products-popup__btn-wrap -->
				<div class="single-products-popup__checkboxwrap form__checkboxfwrap">
					<input type="checkbox" id="form__checkbox" name="form__checkbox" class="form__checkbox" checked required="required">
					<label class="form__checkbox-label" for="form__checkbox"> <span><?php esc_html_e('I agree to the terms of', 'understrap' ); ?> <a href="<?php echo get_home_url() ?>/politika-konfidenczialnosti"><?php esc_html_e( 'the Privacy Policy', 'understrap' ); ?></a></span></label>		
				</div><!-- .single-products-popup__checkboxwrap -->

				<div class="single-products-popup__checkboxwrap form__checkboxfwrap">
					<input type="checkbox" id="form__news" name="form__news" class="form__checkbox" value="Да">
					<label class="form__checkbox-label" for="form__news"><?php esc_html_e('I agree to receive the newsletter', 'understrap' ); ?></label>	
				</div><!-- .single-products-popup__checkboxwrap -->

			</div><!-- .col -->
		</div><!-- .row -->

	</form><!-- .form -->
</div><!-- #order -->

<?php get_footer(); ?>