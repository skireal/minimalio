<?php
/**
 * Footer template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	$copyright_mesage = get_theme_mod( 'minimalio_settings_copyright' );
	$developer        = get_theme_mod( 'minimalio_settings_developer' );

if ( get_theme_mod( 'minimalio_settings_footer_logo' ) === 'general' ) {
	$footer_logo = get_custom_logo();
} elseif ( get_theme_mod( 'minimalio_settings_footer_logo' ) === 'white' ) {
	$footer_logo = get_theme_mod( 'minimalio_white-logo-settings' );
} else {
	$footer_logo = 'disabled';
}

	$social_enable = get_theme_mod( 'minimalio_settings_social_media_location' );
	$social_media_style = get_theme_mod( 'minimalio_settings_social_media_style' );

?>

<div class="footer__section-row row">

	<div class="w-full footer__left">
		<div class="site-info">
				<?php
				if ( get_theme_mod( 'minimalio_settings_footer_logo' ) === 'general' ) :
					the_custom_logo();
					elseif ( get_theme_mod( 'minimalio_settings_footer_logo' ) === 'white' ) :
						?>
						<a href="<?php global $wp; echo esc_url( home_url( $wp->request ) ) ?>" class="mr-4 navbar-brand custom-logo-link" rel="home" aria-current="page">
							<?php
									$logo = get_theme_mod( 'minimalio_white-logo-settings' );
									echo '<img src="' . wp_get_attachment_image_url( $logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							?>
						</a>
						<?php
					else :
endif;
					?>

					<span class="footer__copyright-first-copy">
						<?php if ( $copyright_mesage ) : ?>

							<?php echo wp_kses_post( function_exists( 'pll__' ) ? pll__( $copyright_mesage ) : $copyright_mesage ); ?>

						<?php endif; ?>
					</span>
					<?php if ( get_theme_mod( 'minimalio_settings_footer_menu' ) === 'yes' ) : ?>
							<span class="pb-2 footer__copyright-menu">
								<?php

									wp_nav_menu(
										[
											'theme_location' => 'footer_menu',
											'container_id' => 'copyright-menu',
											'menu_class'   => 'copyright-menu list-none m-0 p-0',
											'fallback_cb'  => '',
											'menu_id'      => 'footer-copyright-menu',
											'depth'        => 1,
											'walker'       => new Minimalio_BemNavWalker(),
										]
									);
								?>
							</span>

					<?php endif; ?>




				</span>

		</div><!-- .site-info -->
	</div>

</div><!-- row end -->
