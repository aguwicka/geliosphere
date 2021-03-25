<?php
/**
 *about-company
 */

require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;

get_header(); ?>
<style>
	body{
		background-color: #000;
		background-image: none;
	}
</style>
<div class="wrapper" id="about-comp-wrapper">

	<main class="site-main" id="main">
		<div class="about-comp__page">
			<div class="about-comp__page-main">

				<div class="container">

					<h1 class="frontpage-main__title"><?php echo get_the_title(); ?></h1>
					<p class="about-comp-main__text"><?php echo get_field('about-comp-main-text'); ?></p>

					<div class="row align-items-center">

						<?php if(get_field('about-comp-first-block-list')) : ?>
							<div class="col-lg-7 order-2 order-lg-1">

								<div class="about-comp__main-left">

									<?php while(the_repeater_field('about-comp-first-block-list')) : ?>
										<div class="about-comp__main-left-item">
											<img src="<?php echo get_sub_field('about-comp-first-block-item-img'); ?>" alt="<?php echo get_sub_field('about-comp-first-block-item-text'); ?>" class="about-comp__main-left-img">
											<p class="about-comp__main-left-text"><?php echo get_sub_field('about-comp-first-block-item-text'); ?></p>
										</div><!-- .about-comp__main-left-item -->
									<?php endwhile; ?>

								</div><!-- .about-comp__main-left -->
							<?php endif; ?>

						</div><!-- .col-lg-7 -->
						<div class="col-lg-5 order-1 order-lg-2">
							<div class="about-comp__main-left-text-wrap">
								<span class="about-comp__main-title"><?php echo get_field('about-comp-first-block-low-title'); ?></span>
								<p class="about-comp__main-text"><?php echo get_field('about-comp-first-block-low-text'); ?></p>
							</div><!-- .about-comp__main-left-text-wrap -->
						</div><!-- .col-lg-5 -->
					</div><!-- .row -->

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

			</div><!-- .about-comp__page-main -->
			<div class="about-comp__page-sec">

				<div class="container">

					<div class="about-comp__main-text-mb">

						<div class="row align-items-center">
							<div class="col-lg-7">

								<span class="about-comp__main-title"><?php echo get_field('about-comp-sec-block-low-title'); ?></span>
								<p class="about-comp__main-text"><?php echo get_field('about-comp-sec-block-low-text'); ?></p>

							</div><!-- .col -->
							<div class="col-lg-5 text-center">

								<img src="<?php echo get_field('about-comp-sec-block-low-img'); ?>" alt="<?php echo get_field('about-comp-sec-block-low-title'); ?>" class="about-comp__page-sec-img">

							</div><!-- .col -->
						</div><!-- .row -->

					</div><!-- .about-comp__main-text-mb -->
					<div class="about-comp__main-text-mb">

						<div class="row align-items-center">
							<div class="col-lg-7 order-2 order-lg-1">

								<?php if(get_field('about-comp-th-block-list')) : ?>
									<div class="about-comp__main-wrap-img">
										<?php while(the_repeater_field('about-comp-th-block-list')) : ?>
											<img src="<?php echo get_sub_field('about-comp-th-block-img'); ?>" alt="">									
										<?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div><!-- .col -->
							<div class="col-lg-5 order-1 order-lg-2">

								<span class="about-comp__main-title"><?php echo get_field('about-comp-th-block-low-title'); ?></span>
								<p class="about-comp__main-text"><?php echo get_field('about-comp-th-block-low-text'); ?></p>

							</div><!-- .col -->
						</div><!-- .row -->

					</div><!-- .about-comp__main-text-mb -->
					<div class="about-comp__main-text-mb">

						<div class="row align-items-center">
							<div class="col-lg-7">

								<span class="about-comp__main-title"><?php echo get_field('about-comp-four-block-low-title'); ?></span>
								<p class="about-comp__main-text"><?php echo get_field('about-comp-four-block-low-text'); ?></p>

							</div><!-- .col -->
							<div class="col-lg-5 text-center">

								<img src="<?php echo get_field('about-comp-four-block-low-img'); ?>" alt="<?php echo get_field('about-comp-four-block-low-title'); ?>" class="about-comp__page-sec-img">

							</div><!-- .col -->
						</div><!-- .row -->

					</div><!-- .about-comp__main-text-mb -->

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

			</div><!-- .about-comp__page-sec -->
			<div class="about-comp__page-th">
				<div class="container">

					<div class="row">
						<div class="col-12">

							<div class="frontpage-main__text-inner">
								<h2 class="frontpage-main__title"><?php echo get_field('about-comp-five-block-title'); ?></h2>
								<p class="frontpage-main__text"><?php echo get_field('about-comp-five-block-text'); ?></p>
								<form class="frontpage-main-five__form form">
									<input name="place" type="hidden" value="форма cвяжитесь с нами">
									<input name="page" type="hidden" value="о компании">
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
							</div><!-- .frontpage-main__text-inner -->

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .about-comp__page-th -->
			<div class="about-comp__page-four">

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
					<div class="row">
						<div class="col">

							<h2 class="frontpage-main__title"><span id="mission" class="yakor"></span><?php echo get_field('about-comp-six-block-title'); ?></h2>
							<p class="about-comp__main-text"><?php echo get_field('about-comp-six-block-text'); ?></p>
							<span class="about-comp__main-sub-title dekst"><?php echo get_field('about-comp-six-block-low-title'); ?></span>

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

				<div class="container container--custom">
					<div class="row">
						<div class="col">

							<?php if(get_field('about-comp-six-block-list')) : ?>
								<div class="about-comp__main-ship-wrap">
									<img src="<?php echo get_template_directory_uri(); ?>/img/about-comp/spaceship-circle.png" class="about-comp__main-ship" alt="">
									<span class="about-comp__main-sub-title mob"><?php echo get_field('about-comp-six-block-low-title'); ?></span>
									<?php $count=1; ?>
									<?php while(the_repeater_field('about-comp-six-block-list')) : ?>
										<p class="about-comp__main-ship-text about-comp__main-ship-text-<?php echo $count; ?>"><?php echo get_sub_field('about-comp-six-block-list-text'); ?></p>
										<?php $count++; ?>
									<?php endwhile; ?>

								</div><!-- .about-comp__main-ship-wrap -->
								<p class="about-comp__main-ship-text--bottom"><?php echo get_field('about-comp-six-block-bottom-text'); ?></p>

							<?php endif; ?>

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

				<?php if ( !$detect->isMobile() ) : ?>
					<div class="frontpage-circle-wrap--two">
						<img class="frontpage-circle-1--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
						<img class="frontpage-circle-1-icon--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
						<img class="frontpage-circle-2--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
						<img class="frontpage-circle-3--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
						<img class="frontpage-circle-3-icon--two" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
					</div><!-- .frontpage-circle-wrap -->
				<?php endif; ?>

			</div><!-- .about-comp__page-four -->
			<div class="about-comp__page-five">

				<div class="container container--custom">
					<div class="row">
						<div class="col">

							<h2 class="frontpage-main__title"><span id="services" class="yakor"></span><?php echo get_field('about-comp-sev-block-title'); ?></h2>
							<p class="about-comp-main__text"><?php echo get_field('about-comp-sev-block-text'); ?></p>

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .about-comp__page-five -->
			<div class="about-comp__page-six">

				<?php if ( !$detect->isMobile() ) : ?>
					<div class="frontpage-circle-wrap">
						<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
						<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
						<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
						<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
						<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
					</div><!-- .frontpage-circle-wrap -->
				<?php endif; ?>

				<?php if(get_field('about-comp-sev-block-list')) : ?>

					<div class="container container--custom">
						<div class="row">
							<?php while(the_repeater_field('about-comp-sev-block-list')) : ?>
								<div class="col-lg-4">

									<div class="about-comp__page-six-item">
										<img src="<?php echo get_sub_field('about-comp-sev-block-list-img'); ?>" alt="<?php echo get_sub_field('about-comp-sev-block-list-title'); ?>" class="about-comp__page-six-item-img">
										<span class="about-comp__page-six-item-title"><?php echo get_sub_field('about-comp-sev-block-list-title'); ?></span>
										<p class="about-comp__page-six-item-text"><?php echo get_sub_field('about-comp-sev-block-list-text'); ?></p>
									</div><!-- .about-comp__page-six-item -->

								</div><!-- .col -->
							<?php endwhile; ?>
						</div><!-- .row -->
					</div><!-- .container -->

				<?php endif; ?>

			</div><!-- .about-comp__page-six -->
			<div class="about-comp__page-seven">

				<div class="container container--custom">
					<div class="row">
						<div class="col-12">

							<p class="about-comp__text"><span id="head" class="yakor"></span><?php echo get_field('about-comp-eight-block-text'); ?></p>

							<h2 class="frontpage-main__title"><?php echo get_field('about-comp-eight-block-title'); ?></h2>

						</div><!-- .col -->
						<?php if(get_field('about-comp-eight-block-list-text')) : ?>
							<?php while(the_repeater_field('about-comp-eight-block-list-text')) : ?>
								<div class="col-lg-4">

									<div class="about-comp__page-seven-item">
										<div class="about-comp__page-seven-item-img-wrap">
											<div class="about-comp__page-seven-item-img-inner"></div>
											<div style="background-image:url(<?php echo get_sub_field('about-comp-eight-block-list-img'); ?>)" class="about-comp__page-seven-item-img">
											</div><!-- .about-comp__page-seven-item-img -->
										</div><!-- .about-comp__page-seven-item-img-wrap -->
										<span class="about-comp__page-seven-item-title"><?php echo get_sub_field('about-comp-eight-block-list-title'); ?></span>
										<p class="about-comp__page-seven-item-text"><?php echo get_sub_field('about-comp-eight-block-list-text'); ?></p>
									</div><!-- .about-comp__page-seven-item -->

								</div><!-- .col -->
							<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .about-comp__page-seven -->
			<div class="about-comp__page-eight">


				<?php if ( !$detect->isMobile() ) : ?>
					<div class="frontpage-circle-wrap">
						<img class="frontpage-circle-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big.png" alt="">
						<img class="frontpage-circle-1-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-big-icon.png" alt="">
						<img class="frontpage-circle-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-mid.png" alt="">
						<img class="frontpage-circle-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small.png" alt="">
						<img class="frontpage-circle-3-icon" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-circle-small-icon.png" alt="">
					</div><!-- .frontpage-circle-wrap -->
				<?php endif; ?>

				<div class="container container--custom">
					<div class="row">
						<div class="col">

							<h2 class="frontpage-main__title"><span id="documents" class="yakor"></span><?php echo get_field('about-comp-nine-block-title'); ?></h2>

							<?php if(get_field('about-comp-nine-block-list')) : ?>

								<div class="about-comp__page-eight-item-wrap">
									<?php $count=1; ?>
									<?php while(the_repeater_field('about-comp-nine-block-list')) : ?>
										<div class="about-comp__page-eight-item" <?php echo $count==8 ? 'id="currenticon" class="lastimg"': ''; ?>>
											<a class="about-comp__page-eight-item-link" href="<?php echo get_sub_field('about-comp-nine-block-list-img'); ?>">
												<img class="about-comp__page-eight-item-img" src="<?php echo get_sub_field('about-comp-nine-block-list-img'); ?>" alt="">
											</a><!-- .about-comp__page-eight-item-link -->
											<p class="about-comp__page-eight-item-text"><?php echo get_sub_field('about-comp-nine-block-list-text'); ?></p>
										</div><!-- .about-comp__page-eight-item -->
										<?php $count++; ?>
									<?php endwhile; ?>
								</div><!-- .about-comp__page-eight-item-wrap -->
								<div class="btn-wrap frontpage-main__btn-wrap">
									<a href="#currenticon" class="btn documents-main__btn yakor-btn"><?php esc_html_e( 'Show more', 'understrap' ); ?></a>
								</div>

							<?php endif; ?>

						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .about-comp__page-eight -->

		</div><!-- .about-comp__page -->
	</main><!-- #main -->


</div><!-- .wrapper -->

<?php get_footer(); ?>