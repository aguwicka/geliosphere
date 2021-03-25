<?php
require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;
get_header(); ?>


<?php	
//get all taxonomy
$terms = get_terms( [
	'taxonomy' => 'categoria',
	'hide_empty' => false,
	'orderby' => 'ID',
	'order' => 'DESC'
] );
//get current post id
$id=get_the_ID();
//get current post title
$title=get_the_title();
//get current post category
$cat = (get_the_terms($id, 'categoria')[0]->name);
?>

<div class="category-menu-top category-page__top-aside">

	<div class="category-page__top-aside-title"><?php echo $title;?></div>

	<div class="category-page__top-aside-inner">


		<div class="category-page__top-aside-inner-wrap">
			<?php if ($terms):
				foreach($terms as $term){
							//get a category name
					$catName = $term->name;
							//get a category slug
					$catSlug = $term->slug;
							//if category is current get a class
					$getCatClass=($catName==$cat) ? "active" : "";
							//query have posts
					$args = array(
						'post_type' => 'products',
						'tax_query' => array(
							array(
								'taxonomy' => 'categoria',
								'field' => 'slug',
								'terms' => $catSlug
							)
						));
					$my_posts = new WP_Query($args);
							// //if have posts get a link
							// $getPostLink=($my_posts->have_posts())?'':'href="'.get_term_link($term).'"';
														 //if have posts get a class
					$getPostClass=(($my_posts->have_posts())?'have-child':'');
					echo '<div class="category-page__top-aside-link-wrap ' . $getPostClass . '">';
					echo '<a href="' . get_term_link($term) . '" class="category-page__top-aside-link ' . $getCatClass . '">' . $catName . '</a>';
					echo '<span class="category-page__top-aside-link-img"></span></div>';
					if($my_posts->have_posts()) :
						echo '<ul class="category-page__aside-list mob">';
						echo '<li><div class="category-page__top-aside-link-wrap first"><a  href="' . get_term_link($term) . '" class="category-page__top-aside-link ' . $getCatClass . '">' . $catName . '</a><span class="category-page__top-aside-link-img"></span></div></li>';
						while ($my_posts->have_posts()) : $my_posts->the_post();
							$ifPageActive=($title==get_the_title()) ? "active" : "";
							echo '<li><div class="category-page__top-aside-link-wrap"><a class="category-page__top-aside-link ' . $ifPageActive . '" href="'.get_permalink().'">'. get_the_title() .'</a></div></li>';
						endwhile;
						echo '</ul>';
					endif;
					?>
				<?php }
				wp_reset_postdata();
			endif;?>
		</div><!-- .category-page__top-aside-inner-wrap -->

	</div><!-- .category-page__top-aside-inner -->

</div><!-- .category-page__top-aside -->

<div class="wrapper" id="single-products-wrapper">
	<main class="site-main" id="main">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
					}
					?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
		<div class="single-products-page">

			<div class="single-products-wrapper__background">

				<div class="container">

					<div class="single-products-wrapper__background-inner">
						<div class="category-page__aside-part-wrap">
							<aside class="category-menu category-page__aside-part open">
								<div class="category-page__aside-wrap">
									<img class="category-page__aside-img--arrow" src="<?php echo get_template_directory_uri(); ?>/img/icons/menu-arrow.png" alt="">
									<img class="category-page__aside-img--menu" src="<?php echo get_template_directory_uri(); ?>/img/icons/menu.png" alt="">
									<?php if ($terms):
										foreach($terms as $term){
											//get a category name
											$catName = $term->name;
											//get a category slug
											$catSlug = $term->slug;
											//if category is current get a class
											$getCatClass=($catName==$cat) ? "active" : "";
											?>
											<a href="<?php echo get_term_link($term); ?>" class="category-page__aside-title <?php echo $getCatClass ;?>"><?php echo $catName; ?></a>
											<?php
											$args = array(
												'post_type' => 'products',
												'tax_query' => array(
													array(
														'taxonomy' => 'categoria',
														'field' => 'slug',
														'terms' => $catSlug,
													)
												),
											);
											$my_posts = new WP_Query($args);
											if($my_posts->have_posts()) :
												if($getCatClass):
													echo '<ul class="category-page__aside-list">';
													while ($my_posts->have_posts()) : $my_posts->the_post();
														$ifPageActive=($title==get_the_title()) ? "active" : "";
														echo '<li><a class="category-page__aside-title ' . $ifPageActive . '" href="'.get_permalink().'">'. get_the_title() .'</a></li>';
													endwhile;
													echo '</ul>';
												endif;
											endif;
										}
										wp_reset_postdata();
									endif;?>
								</div>
							</aside><!-- .category-page__aside-part -->
						</div><!-- .category-page__aside-part-wrap -->
						<div class="category-page__content-part">
							<div class="single-products-page__content-part">

								<div class="row">
									<div class="col-12">

										<h1 class="single-products-page__title"><?php echo $title;?></h1>

									</div><!-- .col -->

									<div class="col-lg-5">

										<?php 
										$images = get_field('single-product-gallery');
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

										<div class="btn-wrap single-products-page__btn-wrap">
											<a href="#order" class="btn-popup btn single-products-page__btn"><?php esc_html_e( 'Checkout', 'understrap' ); ?></a>
										</div>
									</div><!-- .col -->
									<div class="col-lg-7">

										<div class="single-products-page__text-wrap">
											<div class="single-products-page__text wp-editor"><?php echo get_field('single-product-text'); ?></div>
										</div><!-- .single-products-page__text-wrap -->

									</div><!-- .col -->
								</div><!-- .row -->

							</div><!-- .single-products-page__content-part -->
						</div><!-- .category-page__content-part -->
					</div><!-- .single-products-wrapper__background-inner -->

				</div><!-- .container -->

			</div><!-- .single-products-wrapper__background -->
			<div class="single-products-main-2">
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

				<?php if ( !$detect->isMobile() ) : ?>
					<div class="comet-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/comet.png" alt="">
					</div>
				<?php endif; ?>

				<?php if ( !$detect->isMobile() ) : ?>
					<div class="airship-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/airship.png" alt="">
					</div>
				<?php endif; ?>

				<?php if ( !$detect->isMobile() ) : ?>
					<div class="fire-comet-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/fire-comet.png" alt="">
					</div>
				<?php endif; ?>


				<?php if ( !$detect->isMobile() ) : ?>
					<div class="astronaut-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/single-products/astronaut.png" alt="">
					</div>
				<?php endif; ?>

				<div class="container">

					<div class="single-products-wrapper__background-inner">
						<aside class="category-menu category-page__aside-part open">
							<div class="category-page__aside-wrap">
							</div>
						</aside><!-- .category-page__aside-part -->
						<div class="category-page__content-part">
							<div class="single-products-main-2__content wp-editor"><?php the_content(); ?></div>
						</div>
					</div>


				</div><!-- .container -->

			</div><!-- .single-products-main-2 -->
		</div><!-- .single-products-page -->
	</main><!-- #main -->
</div><!-- .wrapper -->

<div id="order" class="zoom-anim-dialog mfp-hide popup popup-order">
	<form id="formorder" class="single-products-popup__form form"  enctype="multipart/form-data">
		<input name="place" type="hidden" value="оформление заказа">
		<input name="page" type="hidden" value="<?php echo $title; ?>">
		<input type="hidden" name="utm" value="">

		<div class="row">
			<div class="col-12">
				<div class="single-products-popup__top-text-wrap">
					<span class="single-products-popup__top-title"><?php esc_html_e( 'Checkout ', 'understrap' ); ?></span>
					<p class="single-products-popup__top-text"><?php esc_html_e( 'Please fill out the form below and make sure the contact information is correct.After receiving your request, one of our staff will contact you shortly.', 'understrap' ); ?></p>
					<p class="single-products-popup__top-text--warning"><?php esc_html_e( 'Fields marked with * are required', 'understrap' ); ?></p>
				</div>
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-6">

				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Your data:', 'understrap' ); ?></span>

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="text" name="name_org" class="form__textfield" placeholder="<?php esc_html_e( 'Name of the organization', 'understrap' ); ?>*" required="required" data-title="<?php esc_html_e( 'Name of the organization', 'understrap' ); ?>">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="text" name="name_org_contact" class="form__textfield" placeholder="<?php esc_html_e( 'The contact person', 'understrap' ); ?>*" required="required" data-title="<?php esc_html_e( 'The contact person', 'understrap' ); ?>">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="text" name="name_org_post" class="form__textfield" placeholder="<?php esc_html_e( 'Position', 'understrap' ); ?>" data-title="<?php esc_html_e( 'Position', 'understrap' ); ?>">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="email" name="email" class="form__textfield" placeholder="<?php esc_html_e( 'Email', 'understrap' ); ?>*" required="required" data-title="<?php esc_html_e( 'Email', 'understrap' ); ?>">
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__fieldwrap form__fieldwrap">
					<input type="tel" name="phone" class="form__textfield" placeholder="<?php esc_html_e( 'Phone', 'understrap' ); ?>*" required="required" data-title="<?php esc_html_e( 'Phone', 'understrap' ); ?>">
				</div><!-- .form__fieldwrap -->

				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Products', 'understrap' ); ?>*</span>

				<div class="form__select single-products-popup__select">
					<select class="selectpicker" name="product" required data-title="<?php esc_html_e( 'Products', 'understrap' ); ?>">
						<?php if ($terms):
							foreach($terms as $term){
											//get a category name
								$catName = $term->name;
											//get a category slug
								$catSlug = $term->slug;
											//if category is current get a class
								$getCatClass=($catName==$cat) ? "selected" : "";
								$args = array(
									'post_type' => 'products',
									'tax_query' => array(
										array(
											'taxonomy' => 'categoria',
											'field' => 'slug',
											'terms' => $catSlug
										)
									));
								$my_posts = new WP_Query($args);
								if($my_posts->have_posts()) :
									?>

									<optgroup <?php echo $getCatClass;?> label="<?php echo $catName; ?>">
										<?php
									endif;
									if($my_posts->have_posts()) :
										while ($my_posts->have_posts()) : $my_posts->the_post();
											$ifPageActive=($title==get_the_title()) ? "selected" : "";
											echo '<option '.$ifPageActive.'>'. get_the_title() .'</option>';
										endwhile;
									endif;
									if($my_posts->have_posts()) :?>
									</optgroup>
									<?php
								endif;
							}
							wp_reset_postdata();
						endif;?>
					</select>
				</div><!-- .form__select -->

				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Number of products', 'understrap' ); ?>*</span>
				<div class="single-products-popup__countwrap form__countwrap">
					<div class="button minus"></div>
					<input type="number" name="count_product" class="form__count"  value="1" required="required" pattern="^[0-9]" onkeypress="return event.charCode >= 48" step="1" min="1" max="99" maxlength="2" data-title="<?php esc_html_e( 'Number of products', 'understrap' ); ?>">
					<div class="button plus"></div>
				</div><!-- .form__fieldwrap -->

			</div><!-- .col-md-6 -->
			<div class="col-md-6">

				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Additional Information', 'understrap' ); ?></span>
				<p class="single-products-popup__text form__text"><?php esc_html_e( 'This item is optional. But if you have specific requirements for the characteristics of products, please leave them below.', 'understrap' ); ?></p>
				<div class="single-products-popup__fieldwrap form__fieldwrap last">
					<textarea name="textarea" class="form__textareafield" placeholder="<?php esc_html_e( 'Message', 'understrap' ); ?>" data-title="<?php esc_html_e( 'Message', 'understrap' ); ?>"></textarea>
				</div><!-- .form__fieldwrap -->


				<span class="single-products-popup__label form__label"><?php esc_html_e( 'Upload file', 'understrap' ); ?></span>
				<div class="single-products-popup__uploadfile">
					<label class="label" for="attach_file"><span><?php esc_html_e( 'Select a file', 'understrap' ); ?></span></label>
					<span class="single-products-popup__size-text">Max 30 mb</span>
					<input type="file" id="attach_file" name="attach_file" class="single-products-popup__inputfile form__inputfile" data-multiple-caption="<?php esc_html_e( 'Selected files', 'understrap' ); ?>: {count}" multiple style="visibility: hidden; height: 0;" />
					<ul class="file-ouput"></ul>
				</div>	

			</div><!-- .col-md-6 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-6">

				<span class="single-products-popup__verifdata-title form__verifdata-title"><?php esc_html_e( 'Check data', 'understrap' ); ?></span>
				<div class="single-products-popup__verifdatawrap form__verifdatawrap closed">
					<p class="single-products-popup__verifdata-text form__verifdata-text"><?php esc_html_e( 'Check if you have entered your data and product specifications correctly', 'understrap' ); ?></p>
					<ul class="single-products-popup__verifdata form__verifdata">
					</ul>
				</div><!-- .form__fieldwrap -->

				<div class="single-products-popup__captcha-wrap form__btn-wrap">
					<div class="g-recaptcha" data-sitekey="6LfmweEZAAAAAIkvAuF_ivtBUBst_vj0jetafin1" data-callback="correctCaptcha"></div>
				</div>

				<div class="single-products-popup__btn-wrap form__btn-wrap">
					<button type="submit" class="btn single-products-popup__btn form__btn"><?php esc_html_e( 'Send an order', 'understrap' ); ?></button>
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