<?php
$id=get_the_ID();
$cat = get_post_type($id);
$cat = get_post_type_object($cat);
$cat = $cat->labels->singular_name;


/**
 * Search results partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="search-item">
		<?php if(get_the_post_thumbnail_url()): ?>
			<a href="<?php echo get_the_permalink() ?>" class="search-item__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></a>
			<?php else : ?>
				<a href="<?php echo get_the_permalink() ?>" class="search-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/no-photo.png)"></a>
			<?php endif; ?>
			<div class="search-item__text-wrap">
				<?php if($cat): ?>
					<span class="search-item__cat"><?php echo $cat; ?></span>
				<?php endif; ?>
				<?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>');?>
				<span class="search-item__date"><?php echo get_the_date(); ?></span>
				<div class="search-item__text"><?php the_excerpt(); ?></div>
			</div><!-- .search-item__text-wrap -->
		</div><!-- .search-item -->

	</article><!-- #post-## -->
