<?php
/**
 * Template part: Hero section.
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$image_url   = get_template_directory_uri() . '/assets/dist/images/borsch.jpg';
?>
<section class="section-hero" id="hero">
	<div class="container">
		<div class="hero-inner">
			<div class="hero-name hero-name--top"><span>veronika</span><span>contemporary</span></div>
			<div class="hero-image-link">
				<img
					src="<?php echo esc_url( $image_url ); ?>"
					alt="<?php esc_attr_e( 'Borsch', 'minimalio' ); ?>"
					class="hero-image"
				>
				<div class="hero-bubbles"></div>
      </div>
      <div class="hero-name hero-name--bottom"><span>KHACHATURIAN</span><span>artist</span></div>
		</div>
	</div>
</section>
