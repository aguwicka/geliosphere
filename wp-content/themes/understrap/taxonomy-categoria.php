<?php get_header(); ?>
<?php	
$terms = get_terms( [
	'taxonomy' => 'categoria',
	'hide_empty' => false,
	'orderby' => 'ID',
	'order'   => 'DESC',
] );?>

<style>
	body{
				background-image: url('<?php echo get_template_directory_uri(); ?>/img/archive-page/main-cat.jpg');
	}
</style>

<div class="category-menu-top category-page__top-aside">

			<div class="category-page__top-aside-title"><?php single_term_title();?></div>

	<div class="category-page__top-aside-inner">

				<div class="category-page__top-aside-inner-wrap">
					<?php if ($terms):
						foreach($terms as $term){?>
							<div class="category-page__top-aside-link-wrap">
							<?php if((($term->name)==single_term_title('',0))): ?>
							<a href="<?php echo get_term_link($term); ?>" class="category-page__top-aside-link active"><?php echo ($term->name); ?></a>
							<?php else: ?> 
								<a href="<?php echo get_term_link($term); ?>" class="category-page__top-aside-link"><?php echo ($term->name); ?></a>
							<?php endif; ?>  
							</div>
						<?php }
						wp_reset_postdata();
					endif;?>
				</div><!-- .category-page__top-aside-inner-wrap -->

	</div><!-- .category-page__top-aside-inner -->

</div><!-- .category-page__top-aside -->

<div class="container">

	<div class="wrapper" id="categoria-wrapper">
		<main class="site-main" id="main">
			<div class="row px-3">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
				}
				?>
			</div><!-- .row -->
			<div class="category-page">
				<aside class="category-menu category-page__aside-part open">
					<div class="category-page__aside-wrap">
						<img class="category-page__aside-img--arrow" src="<?php echo get_template_directory_uri(); ?>/img/icons/menu-arrow.png" alt="">
						<img class="category-page__aside-img--menu" src="<?php echo get_template_directory_uri(); ?>/img/icons/menu.png" alt="">
						<?php if ($terms):
							foreach($terms as $term){?>
								<?php if((($term->name)==single_term_title('',0))): ?>
								<a href="<?php echo get_term_link($term); ?>" class="category-page__aside-title active"><?php echo ($term->name); ?></a>
								<?php else: ?> 
									<a href="<?php echo get_term_link($term); ?>" class="category-page__aside-title"><?php echo ($term->name); ?></a>
								<?php endif; ?>  
							<?php }
							wp_reset_postdata();
						endif;?>
					</div>
				</aside><!-- .category-page__aside-part -->
				<div class="category-page__content-part">

					<div class="row px-3">

						<div class="category-page__text-wrap">
							<h1 class="category-page__title"><?php single_term_title();?></h1>
							<p class="category-page__text"><?php echo get_field('category_text'); ?></p>
						</div><!-- .category-page__text-wrap -->

					</div><!-- .row -->
					<div class="row px-3">

						<?php if(have_posts()){ ?>
							<?php while ( have_posts()){?>

								<div class="col-6 col-lg-3">
									<div class="category-page__item-wrap">
										<?php the_post();	?>	
										<?php if(get_the_post_thumbnail_url()): ?>
											<div class="category-page__item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
												<a class="category-page__item-link" href="<?php echo get_permalink(); ?>">
													<span class="category-page__item-title"><?php echo get_the_title(); ?></span>
												</a><!-- .category-page__item-link -->
											</div><!-- .category-page__item -->
											<?php else: ?>
												<div class="category-page__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/no-photo.png)">
													<a class="category-page__item-link" href="<?php echo get_permalink(); ?>">
														<span class="category-page__item-title"><?php echo get_the_title(); ?></span>
													</a><!-- .category-page__item-link -->
												</div><!-- .category-page__item -->
											<?php endif; ?>
										</div><!-- .category-page__item-wrap -->
									</div><!-- .col -->

								<?php }
							} else {
								get_template_part( 'loop-templates/content', 'none' );
							}
							?>

						</div><!-- .row -->

					</div><!-- .category-page__content-part -->

				</div><!-- .category-page -->
			</main><!-- #main -->
		</div><!-- .wrapper -->

	</div><!-- .container -->

	<?php get_footer(); ?>