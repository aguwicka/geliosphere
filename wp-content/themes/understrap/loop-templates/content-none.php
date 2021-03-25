<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="no-results not-found">

	<header class="page-header">
		<?php if (is_search()) :?>
			<h1 class="page-title"><?php esc_html_e( 'At your request', 'understrap' ); ?> <span>"<?php echo get_search_query(); ?>" </span> <?php esc_html_e( 'Nothing Found', 'understrap' ); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'understrap' ); ?></h1>
			<?php endif; ?>

		</header><!-- .page-header -->

		<div class="page-content">

			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				$kses = array( 'a' => array( 'href' => array() ) );
			printf(
				/* translators: 1: Link to WP admin new post page. */
				'<p>' . wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'understrap' ), $kses ) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :

			echo '<div class="not-found-search">';
			echo esc_html_e( '— Check if the query was entered correctly, there are no typos.', 'understrap' );
			echo '<br>';
			echo esc_html_e( '— Try using a more general query.', 'understrap' );  
			echo '</div>';
			get_search_form();

		else :

			printf(
				'<p>%s<p>',
				esc_html__( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'understrap' )
			);
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
