<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package minimalio
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
	// Open Graph meta tags
	$og_post_id = get_queried_object_id();
	$og_queried = get_queried_object();

	if ( is_singular() && $og_queried instanceof WP_Post ) {
		$og_title = get_the_title( $og_post_id );
		$og_url   = get_permalink( $og_post_id );
		$og_type  = ( is_singular( 'post' ) || is_singular( 'portfolio' ) ) ? 'article' : 'website';

		$og_excerpt = get_post_field( 'post_excerpt', $og_post_id );
		if ( $og_excerpt ) {
			$og_description = wp_strip_all_tags( $og_excerpt );
		} else {
			$og_description = wp_trim_words( wp_strip_all_tags( get_post_field( 'post_content', $og_post_id ) ), 25, '...' );
		}

		$og_image = has_post_thumbnail( $og_post_id )
			? get_the_post_thumbnail_url( $og_post_id, 'large' )
			: get_template_directory_uri() . '/assets/dist/images/borsch.jpg';
	} else {
		$og_title       = get_bloginfo( 'name' );
		$og_url         = home_url( '/' );
		$og_type        = 'website';
		$og_description = get_bloginfo( 'description' );
		$og_image       = get_template_directory_uri() . '/assets/dist/images/borsch.jpg';
	}
	?>
	<meta property="og:title" content="<?php echo esc_attr( $og_title ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $og_description ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $og_url ); ?>">
	<meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
	<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
	<meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php
if ( get_theme_mod( 'minimalio_settings_transparent' ) === 'yes' ) {
	$transparent = ' transparent';
} elseif ( get_theme_mod( 'minimalio_settings_transparent' ) === 'home' && is_front_page() ) {
	$transparent = ' transparent';
} elseif ( get_theme_mod( 'minimalio_settings_transparent' ) === 'portfolio' && is_singular( 'portfolio' ) ) {
	$transparent = ' transparent';
} else {
	$transparent = '';
}
?>

<div id="page" class="site bg-cover bg-no-repeat bg-center bg-fixed
<?php
if ( get_theme_mod( 'minimalio_settings_header_variation' ) === 'vertical' ) {
	echo ' vertical ';
}
if  ( get_theme_mod( 'minimalio_settings_container_type') === 'container-fluid' ) {
	echo ' full-width-container ';
}

if ( get_theme_mod( 'minimalio_settings_heading_sizes' ) !== 'default' ) {
	echo esc_attr(get_theme_mod( 'minimalio_settings_heading_sizes' )) ;
}
?>
">
	<!-- Skip to content Accessibility link -->
	<a class="skip-to-content-link screen-reader-text" href="#main">
		<?php printf( '<span>' . esc_html__( 'Skip to Content', 'minimalio' ) . '</span>' );?>
	</a>
	
	<!-- Loading spinner -->
	<div class="lds-dual-ring"></div>
	<!-- ******************* HEADER ******************* -->
	<header id="wrapper-header" class="header py-8
	<?php
	if ( get_theme_mod( 'minimalio_settings_fixed_heading' ) === 'yes' ) {
		echo ' header__fixed ';
	} echo esc_attr( $transparent );
	?>
	" id="header">
		<div class="header__container relative <?php echo esc_html( get_theme_mod( 'minimalio_settings_header_container_type' ) ?: 'container' ); ?>">

			<?php get_template_part( 'templates/snippets/headers/header' ); ?>

			<nav class="header__mobile-button" aria-label="<?php esc_attr_e( 'Mobile Toggle', 'minimalio' ); ?>">
			<button class="header__mobile-button absolute z-[110] block p-0 text-black bg-transparent border-none shadow-none main-header__menu-link md:hidden top-1/2 right-4 md:right-6 lg:right-8 -translate-y-2/4 appearance-auto hover:border-none mobile-toggle" data-toggle="collapse" data-link="#mobilemenu" data-target="#mobilemenu" aria-controls="<?php esc_attr_e( 'primary-menu', 'minimalio' ); ?>" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'minimalio' ); ?>">
				<?php
					echo minimalio_get_svg('bars', [
						'role'  => 'presentation',
						'title' => __( 'Open Icon', 'minimalio' ),
						'class' => 'mobile-menu__open-icon w-6 h-6',
					]);
					echo minimalio_get_svg(
						'close',
						[
							'role'  => 'presentation',
							'title' => __( 'Close Icon', 'minimalio' ),
							'class' => 'mobile-menu__close-icon w-6 h-6',
						]
					);
					?>
			</button>
			</nav>
		</div>
	<?php minimalio_load_part( 'templates/snippets/mobile-menu/mobile-menu' ); ?>
	</header>

<!-- ******************* The Main Area ******************* -->
	<div class="site-content overflow-x-hidden <?php echo esc_attr( $transparent ); ?>" id="page-content">
