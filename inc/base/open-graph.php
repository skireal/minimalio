<?php
/**
 * Open Graph meta tags.
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function minimalio_open_graph_tags() {
	// Title
	if ( is_singular() ) {
		$og_title = get_the_title();
	} else {
		$og_title = get_bloginfo( 'name' );
	}

	// Description
	if ( is_singular() && has_excerpt() ) {
		$og_description = get_the_excerpt();
	} elseif ( is_singular() ) {
		$og_description = get_bloginfo( 'description' );
	} else {
		$og_description = get_bloginfo( 'description' );
	}

	// URL
	if ( is_singular() ) {
		$og_url = get_permalink();
	} else {
		$og_url = home_url( '/' );
	}

	// Type
	$og_type = is_singular( 'post' ) ? 'article' : 'website';

	// Image: featured image → fallback to hero image
	$og_image = '';
	if ( is_singular() && has_post_thumbnail() ) {
		$og_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
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
