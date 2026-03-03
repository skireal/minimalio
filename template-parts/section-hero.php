<?php
/**
 * Template part: Hero section.
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Find the artwork post with slug 'borsch'.
$artwork     = get_posts( [
	'post_type'      => 'artworks',
	'name'           => 'borsch',
	'posts_per_page' => 1,
	'post_status'    => 'publish',
] );
$artwork_url = ! empty( $artwork ) ? get_permalink( $artwork[0] ) : '#';
$image_url   = get_template_directory_uri() . '/assets/dist/images/borsch.jpg';
?>
<section class="section-hero" id="hero">
	<div class="container">
		<div class="hero-inner">
			<span class="hero-name hero-name--top">VERONIKA</span>
			<a href="<?php echo esc_url( $artwork_url ); ?>" class="hero-image-link">
				<img
					src="<?php echo esc_url( $image_url ); ?>"
					alt="<?php esc_attr_e( 'Borsch', 'minimalio' ); ?>"
					class="hero-image"
				>
			</a>
			<span class="hero-name hero-name--bottom">KHACHATURIAN</span>
		</div>
	</div>
</section>
