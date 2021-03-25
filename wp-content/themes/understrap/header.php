<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="prefetch prerender" href="<?php echo get_template_directory_uri(); ?>/img/loader-bg.jpg"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!-- add loader style start-->
	<style>
		body {margin: 0;}
		.preloader {position: fixed;left: 0;top: 0;right: 0;bottom: 0;overflow: hidden;background-image: url(<?php echo get_template_directory_uri(); ?>/img/loader-bg.jpg);z-index: 1001;display: flex;justify-content: center;align-items: center;}
		.preloader__title{font-size: 24px;text-transform: uppercase; font-family: Montserrat, sans-serif; margin-bottom: 10px; display: block;}
		.preloader__img{width: 280px; border: 2px solid #2FBBFB; ;border-radius: 5px; padding: 11px 10px;}
		.preloader__img-inner{border-radius: 5px; height: 100%;border: 1px solid rgba(0,0,0,0); background: #2FBBFB; height: 11px; box-shadow: 0px 0px 20px rgba(47, 187, 251, 0.9); width: 90%; transition: width .1s;
			-webkit-animation: 4s linear 1 load;
			-moz-animation: 4s linear 1 load;
			-o-animation: 4s linear 1 load;
			animation: 4s linear 1 load;
		}
		.preloader__inner{text-align: center;}
		.loaded_hiding .preloader {transition: opacity .3s;opacity: 0;}
		.loaded_hiding .preloader__img-inner {width: 100%;}
		.loaded .preloader {display: none;}
		@-webkit-keyframes load { from { width:0%; } to { width:90%; }  }
		@-moz-keyframes load { from { width:0%; } to { width:90%; }  }
		@-o-keyframes load { from { width:0%; } to { width:90%; }  }
		@keyframes load { from { width:0%; } to { width:90%; }  }
	</style>
	<!-- add loader style end-->

	<!-- add loader script start-->
	<script type="text/javascript">
		window.onload = function(){
			document.body.classList.add('loaded_hiding');
			window.setTimeout(function () {
				document.body.classList.add('loaded');
				document.body.classList.remove('loaded_hiding');
			}, 500);
		}
	</script>
	<!-- add loader script end-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name='viewport' content='width=device-width'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php if(!is_front_page() && !is_page(10)):?>
	<style>
		body, html {overflow: inherit;}
		body{
			background-image: url('<?php echo get_template_directory_uri(); ?>/img/frontpage/sec-main.jpg'); 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: relative;
		}
		.wrapper{padding-top: 100px;}
		@media only screen and (min-width: 1200px) {
			.wrapper{padding-bottom: 160px;}
		}
	</style>
<?php endif?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

	<div class="preloader">
		<div class="preloader__inner">
			<span class="preloader__title"><?php esc_html_e( 'Loading', 'understrap' ); ?></span>
			<div class="preloader__img"><div class="preloader__img-inner"></div></div>
		</div>
	</div>

	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">

			<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="sr-only">
					<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
				</h2>

				<div class="container-fluid justify-content-between">

					<!-- start custom logo -->
					<div class="custom-logo-wrap">
						<?php echo the_custom_logo(); ?>
					</div>

					<!-- end custom logo -->

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- adding custom animation in mobile menu START -->
					<?php 
					$gtd=get_template_directory_uri();

					$arrow_dir=$gtd.'/img/icons/arrow-left.png'; 
					$circles_dir=$gtd.'/img/frontpage/circles-mobile.png'; 

					$circles='<img class="navMobile__circles--back" src="'.$circles_dir.'" alt="">'; 

					$mobileMenu='<div class="mobile-menu-arrow_wrap"><img class="navMobile__arrow--back" src="'.$arrow_dir.'" alt=""><ul class="mobile-menu-list">%3$s</ul>'.$circles.'</div>';
					?>
					<!-- adding custom animation in mobile menu END -->

					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse navPrimary',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav m-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					wp_nav_menu(
						array(
							'theme_location'  => 'Mobile',
							'container_class' => 'collapse navbar-collapse navMobile',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav m-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'mobile-menu',
							'depth'           => 2,
							'items_wrap'			=> $mobileMenu,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
					<div class="top-bar-right">
						<ul class="top-bar-right__list">
							<li class="top-bar-right__item dropdown">
								<a aria-haspopup="true" aria-expanded="false" data-hover="dropdown" id="menu-item-dropdown-271" class="top-bar-right__link dropdown-toggle nav-link" href="/">Ru</a>
								<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-271" role="menu">
									<li itemscope="itemscope" id="menu-item-301"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301 nav-item"><a title="" href="/"  class="dropdown-item">Ru</a></li>
									<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302 nav-item"><a href="https://en.geliosfera.appservice.dev/" title="" class="dropdown-item">Eng</a></li>
								</ul>
							</li>
							<li class="top-bar-right__item">
								<a class="top-bar-right__link " href="<?php echo get_permalink(10); ?>"><?php esc_html_e( 'Contacts', 'understrap' ); ?></a>
							</li>
						</ul>
					</div><!-- .top-bar--right -->
				</div><!-- .container -->

			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->
