<?php
/**
 *Contact page
 */

require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;

get_header(); ?>
<div id="frontpage-pagepiling" class="contact-page">

	<div class="section section-1 frontpage-main frontpage-main--fir frontpage-main--fir-contact active">


		<div class="section-inner">

			<?php if ( !$detect->isMobile() ) : ?>
				<div class="frontpage-circle-wrap">
					<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
					<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
					<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
					<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
					<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
				</div><!-- .frontpage-circle-wrap -->

				<video autoplay loop muted class="contact-page__video">
					<source src="<?php echo get_template_directory_uri(); ?>/video/video-worst.mp4" type="video/mp4">
					</video>
					<div class="video-dark"></div>
				<?php endif; ?>

				<div class="container">
					<div class="row">
						<div class="col-12">

							<h1 class="frontpage-main__title"><?php echo get_the_title(); ?></h1>

						</div><!-- .col -->
						<div class="col-lg-6">
							<div class="contact-page__left-map-cont">
								<ul class="contact-page__left-map-cont-list">
									<li class="contact-page__left-map-cont-item adress"><?php echo the_field('opt-adress','option'); ?></li>
									<li class="contact-page__left-map-cont-item email"><b><?php esc_html_e( 'Email', 'understrap' ); ?>:</b><a href="mailto:<?php echo the_field('opt-email','option'); ?>"><?php echo the_field('opt-email','option'); ?></a></li>
									<li class="contact-page__left-map-cont-item phone"><b><?php esc_html_e( 'Tel.', 'understrap' ); ?>:</b><a href="tel:<?php echo the_field('opt-phone','option'); ?>"><?php echo the_field('opt-phone','option'); ?></a></li>
								</ul>
								<p class="contact-page__left-map-text"><?php echo get_field('contact-text'); ?></p>
							</div><!-- .contact-page__left-map-cont -->
						</div><!-- .col -->
						<div class="col-lg-6">
							<a class="contact-page__top-map"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/destination.png" alt=""><?php esc_html_e( 'How can I get to', 'understrap' ); ?></a>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d997.6316433134997!2d30.244134422090866!3d59.994127674730194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sby!4v1605181269258!5m2!1sru!2sby" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

						</div><!-- .col -->
					</div><!-- .row -->

					<div class="frontpage-main__arrow-bottom"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-bottom.png" alt=""></div>
					
				</div><!-- .container -->

			</div><!-- .section-inner -->
			<div class="frontpage-main-first__bottom"></div>
		</div><!-- .section-1 -->

		<div class="section section-5 frontpage-main frontpage-main--five" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/frontpage/five-main.jpg)">
			<div class="frontpage-main-five__top"></div>
			<div class="section-inner">

				<?php if ( !$detect->isMobile() ) : ?>
					<div class="frontpage-circle-wrap">
						<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
						<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
						<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
						<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
						<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
					</div><!-- .frontpage-circle-wrap -->
				<?php endif; ?>
				<div class="container">

					<div class="frontpage-main__text-wrap">
						<div class="frontpage-main__text-inner">
							<h2 class="frontpage-main__title"><?php echo get_field('contact-text-title'); ?></h2>
							<form class="frontpage-main-five__form form">
								<input name="place" type="hidden" value="форма cвяжитесь с нами">
								<input name="page" type="hidden" value="контакты">
								<input type="hidden" name="utm" value="">

								<div class="row">
									<div class="col-md-12">

										<div class="frontpage-main-five__fieldwrap form__fieldwrap">
											<input type="text" name="name" class="form__textfield" placeholder="<?php esc_html_e( 'Your name', 'understrap' ); ?>*" required="required">
										</div><!-- .form__fieldwrap -->

										<div class="frontpage-main-five__fieldwrap form__fieldwrap">
											<input type="tel" name="phone" class="form__textfield" placeholder="<?php esc_html_e( 'Phone', 'understrap' ); ?>*" required="required">
										</div><!-- .form__fieldwrap -->

										<div class="frontpage-main-five__fieldwrap form__fieldwrap">
											<input type="email" name="email" class="form__textfield" placeholder="<?php esc_html_e( 'Email', 'understrap' ); ?>*" required="required">
										</div><!-- .form__fieldwrap -->

										<div class="frontpage-main-five__fieldwrap form__fieldwrap last">
											<textarea name="textarea" class="form__textareafield" placeholder="<?php esc_html_e( 'Message', 'understrap' ); ?>"></textarea>
										</div><!-- .form__fieldwrap -->

										<div class="frontpage-main-five__checkboxwrap form__checkboxfwrap">
											<input type="checkbox" id="form__checkbox" name="form__checkbox" class="form__checkbox" checked required="required">
											<label class="form__checkbox-label" for="form__checkbox"> <span><?php esc_html_e('I agree to the terms of', 'understrap' ); ?> <a href="<?php echo get_home_url() ?>/politika-konfidenczialnosti"><?php esc_html_e( 'the Privacy Policy', 'understrap' ); ?></a></span></label>			
										</div>

										<div class="frontpage-main-five__checkboxwrap form__checkboxfwrap">
											<input type="checkbox" id="form__news" name="form__news" class="form__checkbox" value="Да">
											<label class="form__checkbox-label" for="form__news"><?php esc_html_e('I agree to receive the newsletter', 'understrap' ); ?></label>			
										</div>

										<div class="frontpage-main-five__btn-wrap form__btn-wrap">
											<button type="submit" class="btn frontpage-main-five__btn form__btn"><?php esc_html_e('Submit', 'understrap' ); ?></button>
										</div>

									</div><!-- .col-md-12 -->
								</div><!-- .row -->

							</form><!-- .form -->
						</div>
					</div>
				</div><!-- .container -->

				<?php get_footer(); ?>