<?php
/**
 * Open Graph meta tags.
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function minimalio_open_graph_tags() {
	$queried = get_queried_object();
	$post_id = get_queried_object_id();

	// Title
	if ( is_singular() && $queried instanceof WP_Post ) {
		$og_title = get_the_title( $post_id );
	} else {
		$og_title = get_bloginfo( 'name' );
	}

	// Description
	$og_description = '';
	if ( is_singular() && $queried instanceof WP_Post ) {
		$excerpt = get_post_field( 'post_excerpt', $post_id );
		if ( $excerpt ) {
			$og_description = wp_strip_all_tags( $excerpt );
		} else {
			$content = get_post_field( 'post_content', $post_id );
			if ( $content ) {
				$og_description = wp_trim_words( wp_strip_all_tags( $content ), 25, '...' );
			}
		}
	}
	if ( ! $og_description ) {
		$og_description = get_bloginfo( 'description' );
	}

	// URL
	if ( is_singular() && $post_id ) {
		$og_url = get_permalink( $post_id );
	} else {
		$og_url = home_url( '/' );
	}

	// Type
	$og_type = ( is_singular( 'post' ) || is_singular( 'portfolio' ) ) ? 'article' : 'website';

	// Image: featured image → fallback to hero image
	$og_image = '';
	if ( $post_id && has_post_thumbnail( $post_id ) ) {
		$og_image = get_the_post_thumbnail_url( $post_id, 'large' );
	}
	if ( ! $og_image ) {
		$og_image = get_template_directory_uri() . '/assets/dist/images/borsch.jpg';
	}

	?>
	<!-- Open Graph -->
	<meta property="og:title" content="<?php echo esc_attr( $og_title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $og_description ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $og_url ); ?>">
	<meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
	<meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
	<?php
}

add_action( 'wp_head', 'minimalio_open_graph_tags', 1 );
