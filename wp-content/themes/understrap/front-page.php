<?php
require_once "php-libs/MobileDetect/Mobile_Detect.php";
$detect = new Mobile_Detect;?>
<?php get_header(); ?>

<div id="frontpage-pagepiling" class="pagepiling">
	<div class="section section-1 frontpage-main frontpage-main--fir frontpage-main--fir-fronpage active" style="background-image: url(<?php
		if (!$detect->isMobile()) : 
			echo get_template_directory_uri().'/img/frontpage/main.jpg)';
		else:
			echo get_template_directory_uri().'/img/frontpage/main-mob.jpg)';
		endif; 
		?>">
		<div class="section-inner">
			<?php if ( !$detect->isMobile() ) : ?>
				<div class="frontpage-circle-1-wrap" style="text-align: center;">
					<svg width="50%" height="50%" class="frontpage-circle-1" viewBox="0 0 1353 1353" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g filter="url(#filter0_d)">
							<circle cx="676.5" cy="676.5" r="655.5" stroke="#2FBBFB" stroke-opacity="0.6" stroke-width="2"/>
						</g>
						<circle cx="1255.5" cy="367.5" r="8.5" fill="white"/>
						<g clip-path="url(#clip0)">
							<path d="M65.4962 401.472C65.4575 401.56 65.4581 401.656 65.4909 401.739C65.5232 401.82 65.5858 401.889 65.6722 401.928L75.1382 406.107L73.6714 409.624C73.6362 409.708 73.6392 409.801 73.6706 409.888C73.7053 409.973 73.7724 410.039 73.8566 410.075L79.7924 412.55C79.9684 412.624 80.1702 412.541 80.2438 412.365L81.5159 409.316L91.6205 413.774C91.795 413.85 91.9987 413.772 92.0756 413.597L94.6224 407.823C94.6595 407.74 94.6615 407.644 94.6285 407.559C94.5784 407.48 94.5301 407.405 94.4463 407.368L84.2132 402.854L86.7582 396.851C86.7936 396.767 86.7801 396.678 86.7597 396.586C86.7251 396.501 86.6581 396.433 86.5734 396.398L80.6382 393.923C80.4629 393.849 80.2621 393.931 80.1876 394.107L77.8364 399.646L68.4982 395.523C68.4146 395.486 68.3193 395.483 68.2342 395.516C68.1487 395.55 68.0801 395.615 68.043 395.699L65.4962 401.472Z" fill="white"/>
							<path d="M76.283 411.63C72.4868 410.123 68.6626 409.996 66.5411 411.307C66.4199 411.381 66.3509 411.517 66.3617 411.659C66.3646 411.697 66.3733 411.734 66.3872 411.769C66.4242 411.863 66.4979 411.94 66.593 411.98L74.1562 415.168L73.3265 418.172C73.1722 418.169 73.0186 418.195 72.873 418.252C72.2719 418.49 71.9763 419.172 72.2137 419.773C72.4511 420.374 73.1329 420.669 73.734 420.432C74.3345 420.195 74.6307 419.513 74.3933 418.912C74.3438 418.786 74.2719 418.672 74.1804 418.572L75.8241 415.872L83.1707 418.97C83.2961 419.022 83.4412 419.004 83.5492 418.921C83.6573 418.837 83.713 418.703 83.6944 418.568C83.6499 418.242 83.5593 417.905 83.4252 417.566C82.5296 415.298 79.7926 413.023 76.283 411.63Z" fill="white"/>
							<path d="M70.0799 419.512C70.0014 419.318 69.7728 419.226 69.5785 419.304C69.385 419.383 69.2766 419.608 69.3534 419.802C69.3538 419.803 69.3541 419.804 69.3543 419.805C70.402 422.457 73.3975 423.75 75.9995 422.7C76.1932 422.622 76.2787 422.405 76.2021 422.211C76.2017 422.21 76.2014 422.21 76.2012 422.209C76.1241 422.014 75.9201 421.913 75.7259 421.991C73.5124 422.884 70.9904 421.768 70.0799 419.512Z" fill="white"/>
							<path d="M68.4662 420.866C68.3878 420.672 68.1605 420.58 67.9659 420.658C67.7723 420.737 67.6667 420.961 67.7433 421.155C67.7436 421.156 67.7438 421.156 67.7442 421.157C68.2399 422.412 69.56 423.506 71.3214 424.177C73.0217 424.826 74.7875 424.91 76.0257 424.41C76.2204 424.331 76.3064 424.121 76.2356 423.915C76.1573 423.721 75.9347 423.627 75.74 423.706C74.691 424.129 73.1036 424.037 71.6003 423.464C70.0592 422.877 68.8857 421.906 68.4662 420.866Z" fill="white"/>
						</g>
						<defs>
							<filter id="filter0_d" x="0" y="0" width="1353" height="1353" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
								<feFlood flood-opacity="0" result="BackgroundImageFix"/>
								<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
								<feOffset/>
								<feGaussianBlur stdDeviation="10"/>
								<feColorMatrix type="matrix" values="0 0 0 0 0.184554 0 0 0 0 0.731758 0 0 0 0 0.984314 0 0 0 0.9 0"/>
								<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
								<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
							</filter>
							<clipPath id="clip0">
								<rect width="30" height="30" fill="white" transform="translate(86.9019 388) rotate(68.4443)"/>
							</clipPath>
						</defs>
					</svg><!-- .frontpage-circle-1 -->

					<div class="frontpage-circle-2-wrap" style="text-align: center;">
						<svg width="50%" height="50%" class="frontpage-circle-2" viewBox="0 0 1270 1270" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter1_d)">
								<circle cx="635" cy="635" r="614" stroke="#2FBBFB" stroke-opacity="0.2" stroke-width="2"/>
							</g>
							<circle cx="96.5" cy="929.5" r="8.5" fill="white"/>
							<g clip-path="url(#clip1)">
								<path d="M1077.43 1041.16C1077.73 1041.13 1078.14 1040.96 1078.96 1039.98L1083.66 1043.32C1082.03 1044.08 1080.92 1044.6 1080.92 1044.6C1080.9 1044.61 1080.88 1044.62 1080.86 1044.63C1080.76 1044.69 1080.28 1045.03 1080.24 1045.56C1080.22 1045.76 1080.27 1046.07 1080.6 1046.36C1080.76 1046.5 1080.97 1046.62 1081.25 1046.73C1081.71 1046.91 1082.26 1047.2 1082.88 1047.57L1082.1 1048.46C1081.92 1048.67 1081.94 1048.99 1082.15 1049.17L1084.41 1051.15C1084.62 1051.33 1084.94 1051.31 1085.12 1051.1L1086.13 1049.95L1086.85 1050.57C1087.01 1050.71 1087.12 1050.81 1087.26 1050.94L1086.25 1052.09C1086.07 1052.3 1086.09 1052.61 1086.3 1052.8L1088.57 1054.78C1088.78 1054.96 1089.09 1054.94 1089.27 1054.73L1090.04 1053.85C1090.5 1054.43 1090.75 1054.85 1090.95 1055.19C1091.09 1055.45 1091.24 1055.64 1091.4 1055.78C1091.74 1056.08 1092.07 1056.06 1092.23 1056.02C1092.75 1055.9 1093 1055.36 1093.05 1055.25C1093.05 1055.23 1093.06 1055.22 1093.07 1055.2C1093.07 1055.2 1093.43 1054.01 1093.97 1052.29L1098.03 1056.61C1097.17 1057.55 1097.06 1057.98 1097.07 1058.27C1097.07 1058.47 1097.16 1058.65 1097.3 1058.77C1097.36 1058.83 1097.43 1058.86 1097.49 1058.89C1097.6 1058.96 1097.77 1059.02 1097.98 1059C1098.56 1058.96 1099.66 1058.4 1103.01 1054.47L1103.17 1054.28C1104.72 1052.5 1106.36 1050.19 1105.33 1049.29C1105.09 1049.09 1104.8 1049 1104.48 1049.03C1103.75 1049.12 1102.99 1049.88 1102.53 1050.43L1096.76 1043.86C1096.91 1043.44 1097.06 1043.02 1097.2 1042.63C1098.11 1040.18 1098.45 1038.53 1098.22 1037.73C1098.18 1037.59 1098.1 1037.47 1097.98 1037.36C1097.86 1037.26 1097.73 1037.19 1097.71 1037.18C1097.68 1037.17 1097.65 1037.15 1097.62 1037.15C1097.34 1037.07 1096.5 1036.84 1092.82 1038.8C1092.44 1039 1092.04 1039.21 1091.63 1039.42L1084.48 1034.67C1084.94 1034.16 1085.57 1033.34 1085.55 1032.63C1085.55 1032.3 1085.42 1032.02 1085.18 1031.81C1084.15 1030.91 1082.09 1032.83 1080.55 1034.6L1080.39 1034.78C1076.95 1038.62 1076.56 1039.77 1076.59 1040.35C1076.6 1040.57 1076.69 1040.73 1076.77 1040.83C1076.88 1041.01 1077.15 1041.19 1077.43 1041.16ZM1090.89 1041.06C1090.92 1041.04 1091.7 1040.56 1093.22 1039.78C1094.64 1039.05 1095.5 1039.65 1095.73 1039.85C1095.78 1039.9 1095.81 1039.93 1095.81 1039.93C1097.25 1041.22 1095.25 1044.69 1095.16 1044.83C1095.13 1044.9 1095.06 1044.94 1094.99 1044.95C1094.92 1044.97 1094.84 1044.94 1094.78 1044.89L1090.85 1041.46C1090.79 1041.41 1090.76 1041.33 1090.77 1041.26C1090.78 1041.18 1090.82 1041.1 1090.89 1041.06ZM1092.27 1044.44L1088.15 1049.15C1087.94 1049.39 1087.6 1049.44 1087.39 1049.26C1087.19 1049.08 1087.19 1048.73 1087.4 1048.49L1091.51 1043.78C1091.72 1043.54 1092.06 1043.49 1092.27 1043.67C1092.48 1043.85 1092.48 1044.19 1092.27 1044.44Z" fill="white"/>
							</g>
							<defs>
								<filter id="filter1_d" x="0" y="0" width="1270" height="1270" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix"/>
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
									<feOffset/>
									<feGaussianBlur stdDeviation="10"/>
									<feColorMatrix type="matrix" values="0 0 0 0 0.184554 0 0 0 0 0.731758 0 0 0 0 0.984314 0 0 0 0.9 0"/>
									<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
									<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
								</filter>
								<clipPath id="clip1">
									<rect width="30" height="30" fill="white" transform="translate(1090.23 1023.5) rotate(41.1187)"/>
								</clipPath>
							</defs>
						</svg>

						<div class="frontpage-circle-3-wrap">
							<img class="frontpage-circle-3--earth" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/main-earth.png)" alt="">
						</div>

					</div><!-- .frontpage-circle-2-wrap -->

				</div><!-- .frontpage-circle-1-wrap -->
			<?php endif; ?>


			<div class="frontpage-main__text-wrap">

				<div class="container frontpage-main__text-container">

					<div class="frontpage-main__text-inner-wrap">

						<div class="frontpage-main__text-inner">
							<h1 class="frontpage-main__title"><?php echo get_field('frontpage-first-block-title'); ?></h1>
							<p class="frontpage-main__text"><?php echo get_field('frontpage-first-block-text-top'); ?></p>
							<span class="frontpage-main__text--small"><?php echo get_field('frontpage-first-block-text-bottom'); ?></span>
							<div class="btn-wrap frontpage-main__btn-wrap">
								<?php $post_id = get_field('frontpage-first-block-href', false, false); ?>
								<a href="<?php echo get_the_permalink($post_id); ?>" class="btn frontpage-main__btn"><?php echo get_the_title($post_id); ?></a>
							</div><!-- .frontpage-main__btn-wrap -->
						</div><!-- .frontpage-main__text-inner -->
					</div><!-- .frontpage-main__text-inner-wrap -->
					<div class="frontpage-main__arrow-bottom"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-bottom.png" alt=""></div>

				</div><!-- .container -->

			</div><!-- .frontpage-main__text-wrap -->


		</div><!-- .slide -->
		<div class="frontpage-main-first__bottom"></div>
	</div><!-- .section -->

	<div class="section section-2 frontpage-main frontpage-main--sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/frontpage/sec-main.jpg)">
		<div class="frontpage-main-sec__top"></div>
		<div class="section-inner">

			<?php if ( !$detect->isMobile() ) : ?>

				<div id="frontpage-stones-wrap">
					<div class="frontpage-stone" data-depth="0.1">
						<img class="frontpage-stone-1" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/stone-1.png" alt="">
					</div><!-- .frontpage-stone -->
					<div class="frontpage-stone" data-depth="0.2">
						<img class="frontpage-stone-2" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/stone-2.png" alt="">
					</div><!-- .frontpage-stone -->
					<div class="frontpage-stone" data-depth="0.3">
						<img class="frontpage-stone-3" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/stone-3.png" alt="">
					</div><!-- .frontpage-stone -->
					<div class="frontpage-stone" data-depth="0.4">
						<img class="frontpage-stone-4" src="<?php echo get_template_directory_uri(); ?>/img/frontpage/stone-4.png" alt="">
					</div><!-- .frontpage-stone -->
				</div><!-- .frontpage-stones-wrap -->

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
						<h2 class="frontpage-main__title"><?php echo get_field('frontpage-sec-block-title'); ?></h2>
						<?php $count=1; ?>
						<?php if(get_field('frontpage-sec-block-rep')): ?>

							<div class="row">
								<?php while(the_repeater_field('frontpage-sec-block-rep')): ?>
									<?php echo $count==4 ? '</div><div class="row frontpage-main__row-2">':''; ?>

									<div class="col-xl-4">

										<div class="frontpage-main__item">
											<img class="frontpage-main__item-img" src="<?php echo get_sub_field('frontpage-sec-block-rep-img'); ?>" alt="">
											<span class="frontpage-main__item-title"><?php echo get_sub_field('frontpage-sec-block-rep-title'); ?></span>
											<p class="frontpage-main__item-text"><?php echo get_sub_field('frontpage-sec-block-rep-text'); ?></p>
										</div><!-- .frontpage-main__item -->

									</div><!-- .col -->

									<?php $count++; ?>
								<?php endwhile; ?>
							</div><!-- .row -->
						<?php endif; ?>

					</div><!-- .frontpage-main__text-inner -->
				</div><!-- .frontpage-main__text-wrap -->
				<div class="frontpage-main__arrow-bottom"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-bottom.png" alt=""></div>

			</div><!-- .container -->

		</div><!-- .slide -->
		<div class="frontpage-main-sec__bottom"></div>
	</div><!-- .section -->
	<div class="section section-3 frontpage-main frontpage-main--th" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/frontpage/th-main.jpg)">
		<div class="frontpage-main-th__top"></div>
		<div class="section-inner">

			<div class="container">

				<div class="frontpage-main__text-wrap">
					<div class="frontpage-main__text-inner">
						<h2 class="frontpage-main__title"><?php echo get_field('frontpage-th-block-title'); ?></h2>
						<div class="frontpage-main__partner-list">
							<?php if(get_field('partnery',14)) : 
								$count=1;?>
								<?php while(the_repeater_field('partnery',14)) : 
									if($count<9) :?>
										<a target="_blank" class="frontpage-main__partner-link" href="<?php echo get_sub_field('partnership-link'); ?>">
											<img src="<?php echo get_sub_field('partnership-img'); ?>" alt="">
										</a>
										<?php
									endif;
									$count++;
								endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="btn-wrap frontpage-main__btn-wrap">
							<a href="<?php echo get_permalink(14); ?>" class="btn frontpage-main__btn"><?php echo get_field('frontpage-th-block-btn'); ?></a>
						</div>
					</div>
				</div>
				<div class="frontpage-main__arrow-bottom"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-bottom.png" alt=""></div>

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
		</div><!-- .slide -->
		<div class="frontpage-main-th__bottom"></div>
	</div><!-- .section -->

	<div class="section section-4 frontpage-main frontpage-main--fou" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/frontpage/sec-main.jpg)">
		<div class="frontpage-main-fou__top"></div>
		<div class="section-inner">

			<div class="container">

				<div class="frontpage-main__text-wrap">
					<div class="frontpage-main__text-inner">
						<h2 class="frontpage-main__title"><?php echo get_field('frontpage-fou-block-title'); ?></h2>

						<div class="frontpage-main__gallery">

							<div class="row">
								<div class="col-lg-6">
									<?php 
									$id1= get_field('frontpage-fou-block-first-post');
									$id2= get_field('frontpage-fou-block-sec-post');
									$id3= get_field('frontpage-fou-block-th-post');
									$id4= get_field('frontpage-fou-block-fou-post');
									$id1=$id1[0];
									$id2=$id2[0];
									$id3=$id3[0];
									$id4=$id4[0];
									?>
									<a href="<?php echo get_the_permalink($id1); ?>" class="frontpage-main__gallery-link">
										<div class="frontpage-main__gallery-img frontpage-main__gallery-img-1" style="background-image: url(<?php echo get_the_post_thumbnail_url($id1); ?>)"></div>
										<span class="frontpage-main__gallery-title"><?php echo get_the_title($id1); ?></span>
									</a><!-- .frontpage-main__gallery-link -->
								</div><!-- .col -->
								<div class="col-lg-6">
									<div class="row order-2">
										<div class="col-12 row-padding-top order-3 order-lg-1">

											<a href="<?php echo get_the_permalink($id2); ?>" class="frontpage-main__gallery-link">
												<div class="frontpage-main__gallery-img frontpage-main__gallery-img-2" style="background-image: url(<?php echo get_the_post_thumbnail_url($id2); ?>)"></div>
												<span class="frontpage-main__gallery-title"><?php echo get_the_title($id2); ?></span>
											</a><!-- .frontpage-main__gallery-link -->

										</div><!-- .col -->
										<div class="col-6 order-1 order-lg-2">

											<a href="<?php echo get_the_permalink($id3); ?>" class="frontpage-main__gallery-link">
												<div class="frontpage-main__gallery-img frontpage-main__gallery-img-3" style="background-image: url(<?php echo get_the_post_thumbnail_url($id3); ?>)"></div>
												<span class="frontpage-main__gallery-title"><?php echo get_the_title($id3); ?></span>
											</a><!-- .frontpage-main__gallery-link -->

										</div><!-- .col -->
										<div class="col-6 order-2 order-lg-3">

											<a href="<?php echo get_the_permalink($id4); ?>" class="frontpage-main__gallery-link">
												<div class="frontpage-main__gallery-img frontpage-main__gallery-img-4" style="background-image: url(<?php echo get_the_post_thumbnail_url($id4); ?>)"></div>
												<span class="frontpage-main__gallery-title"><?php echo get_the_title($id4); ?></span>
											</a><!-- .frontpage-main__gallery-link -->

										</div><!-- .col -->
									</div><!-- .row -->
								</div><!-- .col -->
							</div><!-- .row -->

						</div><!-- .frontpage-main__gallery -->
					</div>
				</div>
				<div class="frontpage-main__arrow-bottom"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-bottom.png" alt=""></div>

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
		</div><!-- .slide -->
		<div class="frontpage-main-fou__bottom"></div>
	</div><!-- .section -->

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
						<h2 class="frontpage-main__title"><?php echo get_field('frontpage-five-block-title'); ?></h2>
						<form class="frontpage-main-five__form form">
							<input name="place" type="hidden" value="форма cвяжитесь с нами">
							<input name="page" type="hidden" value="главная">
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