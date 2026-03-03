<?php
/**
 * The home page template.
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main class="site-main" id="main">
	<?php get_template_part( 'template-parts/section', 'hero' ); ?>
	<?php get_template_part( 'template-parts/section', 'about' ); ?>
	<?php get_template_part( 'template-parts/section', 'artworks' ); ?>
	<?php get_template_part( 'template-parts/section', 'exhibitions' ); ?>
	<?php get_template_part( 'template-parts/section', 'contact' ); ?>
</main><!-- #main -->
<?php get_footer(); ?>
