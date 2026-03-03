<?php
/**
 * Template part: Artworks section — 3 random works.
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$artworks_query = new WP_Query( [
	'post_type'      => 'artworks',
	'posts_per_page' => 3,
	'orderby'        => 'rand',
	'post_status'    => 'publish',
] );

if ( ! $artworks_query->have_posts() ) {
	return;
}

// Link to the gallery page (page using the page-gallery.php template).
$gallery_pages = get_pages( [
	'meta_key'   => '_wp_page_template',
	'meta_value' => 'page-gallery.php',
	'number'     => 1,
] );
$gallery_url = ! empty( $gallery_pages ) ? get_permalink( $gallery_pages[0]->ID ) : '#';
?>
<section class="section-artworks" id="artworks">
	<div class="container">

		<p class="artworks-label"><?php esc_html_e( 'Works', 'minimalio' ); ?></p>
		<div class="artworks-divider"></div>

		<div class="artworks-grid">
			<?php while ( $artworks_query->have_posts() ) : $artworks_query->the_post(); ?>

				<div class="artworks-item">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" class="artworks-item__link">
							<?php the_post_thumbnail( 'medium' ); ?>
						</a>
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>" class="artworks-item__title">
						<?php the_title(); ?>
					</a>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<a href="<?php echo esc_url( $gallery_url ); ?>" class="artworks-viewall">
			<?php esc_html_e( 'View all works →', 'minimalio' ); ?>
		</a>

	</div>
</section>
