<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="post-col col-6 col-lg-3">

	<a href="<?php echo get_permalink(); ?>" <?php post_class('custom-archive__post'); ?> id="post-<?php the_ID(); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>)">
		<div class="custom-archive__post-wrap">

			<header class="entry-header">
				<div class="custom-archive__post-text-wrap">
					<div class="custom-archive__date"><?php echo get_the_date(); ?></div>
					<h2 class="entry-title custom-archive__post-title"><?php echo get_the_title(); ?></h2>
				</div>
				<?php if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta">
						<?php understrap_posted_on(); ?>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->

			<div class="entry-content">

			</div><!-- .entry-content -->
		</div><!-- .custom-archive__post-wrap -->
	</a><!-- #post-## -->

</div><!-- .col -->
