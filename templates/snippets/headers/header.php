<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$minimalio_decoration = get_theme_mod( 'minimalio_settings_link_decoration' );
if ( $minimalio_decoration === 'underline' ) {
	$minimalio_class = 'hidden menu-main-container lg:block underlined';
} elseif ( $minimalio_decoration === 'line-through' ) {
	$minimalio_class = 'hidden line-through menu-main-container lg:block';
} else {
	$minimalio_class = 'hidden menu-main-container lg:block';
}

$weight = get_theme_mod( 'minimalio_settings_link_weight' );

$social_enable = get_theme_mod( 'minimalio_settings_social_media_location' );
$social_media_style = get_theme_mod( 'minimalio_settings_social_media_style' );

?>

<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

	<div class="header__row flex flex-wrap justify-between items-center
	<?php
	if ( get_theme_mod( 'minimalio_settings_logo_position' ) === 'center' ) {
		echo 'center-logo';
	}
	if ( get_theme_mod( 'minimalio_settings_menu_position' ) === 'center' ) {
		echo ' center-menu';
	}
	?>
	">
	<div class="w-auto p-0 header__col-left">
	
		<?php if ( ! has_custom_logo() ) : ?>

			<a class="inline-block mr-0 text-black header__brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
			title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
    
    <svg version="1.1" id="svg1" width="247.6183" height="277.47455" viewBox="0 0 247.6183 277.47455" sodipodi:docname="main-logo-3.svg" inkscape:version="1.4.3 (0d15f75, 2025-12-25)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" style="
    max-width: 100%;
    height: auto;
">
  <defs id="defs1"></defs>
  <sodipodi:namedview id="namedview1" pagecolor="#ffffff" bordercolor="#415a77" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" inkscape:zoom="2.8284271" inkscape:cx="82.201163" inkscape:cy="104.12147" inkscape:window-width="1920" inkscape:window-height="991" inkscape:window-x="-9" inkscape:window-y="-9" inkscape:window-maximized="1" inkscape:current-layer="g1"></sodipodi:namedview>
  <g inkscape:groupmode="layer" inkscape:label="Image" id="g1" transform="translate(-272.69384,-80.481066)">
    <path class="logo-path" style="display:inline;fill:#415a77;fill-opacity:1" d="m 392.47428,228.62223 c -3.95741,-1.08948 -6.60706,-2.54918 -9.73951,-5.36553 -2.87635,-2.58608 -5.01821,-6.49791 -13.18896,-24.08789 -2.77167,-5.96686 -28.07385,-58.9385 -35.76669,-74.87972 -10.2743,-21.29057 -20.85036,-43.381809 -20.85036,-43.552164 0,-0.597786 12.74973,-0.05524 15.84431,0.674226 4.51613,1.064563 11.69269,4.751068 15.11737,7.765589 4.51258,3.972134 7.35674,8.804746 15.6489,26.589619 4.44392,9.53126 10.11868,21.67615 12.61057,26.98866 2.49189,5.3125 5.30641,11.32103 6.25448,13.35228 0.94807,2.03125 4.25112,9.06251 7.34011,15.62501 3.08899,6.56251 6.82567,14.54021 8.30375,17.72823 1.47807,3.18802 2.82118,5.80876 2.98469,5.82387 0.16351,0.0151 3.66874,-7.19555 7.7894,-16.02368 4.12067,-8.82813 10.08579,-21.54831 13.25582,-28.26707 8.45374,-17.91732 14.23687,-30.27131 19.41631,-41.47731 6.63417,-14.353395 9.59012,-18.521739 16.2959,-22.979736 6.69008,-4.447558 10.44145,-5.576758 19.50785,-5.872057 4.29687,-0.139953 7.8125,-0.1323 7.8125,0.01701 0,0.149306 -2.7097,5.867247 -6.02156,12.706535 -3.31186,6.839288 -7.30697,15.119728 -8.87801,18.400978 -1.57104,3.28125 -4.39127,9.16194 -6.26717,13.06819 -5.54216,11.54062 -15.71673,32.8434 -18.31772,38.35231 -23.50798,49.78996 -26.95585,56.73232 -29.4312,59.26025 -3.05732,3.12227 -6.26674,4.99439 -10.41375,6.07455 -3.89161,1.01364 -5.84843,1.03 -9.30703,0.0779 z" id="path2"></path>
    <path class="logo-path logo-path--2" style="display:inline;fill:#415a77" d="m 291.48815,356.93612 c -9.67215,-2.60483 -16.55065,-9.9656 -18.33557,-19.62115 -0.38081,-2.06 -0.52713,-35.85212 -0.42922,-99.1268 l 0.14855,-96.00134 1.51715,-3.23664 c 4.86562,-10.3802 16.49595,-14.35122 27.01381,-9.22352 5.19598,2.53317 6.32238,4.22986 19.21093,28.93745 13.7485,26.35614 18.50656,35.48448 27.54282,52.84096 5.69438,10.93751 11.47878,21.96384 12.85424,24.50296 l 2.50083,4.61658 -3.84258,0.99786 c -8.38836,2.17833 -22.82638,1.63771 -24.58124,-0.92042 -0.95887,-1.3978 -7.11051,-13.0016 -22.55704,-42.54927 -11.17526,-21.37715 -13.77452,-26.27563 -14.14497,-26.65722 -0.12641,-0.13021 -0.22984,18.08714 -0.22984,40.48299 v 40.71973 l 48.15345,-0.003 c 50.49786,-0.004 53.93559,-0.14717 62.51414,-2.61247 10.82355,-3.11047 21.32526,-10.7357 26.99737,-19.60263 1.10857,-1.73298 7.81537,-14.3817 14.904,-28.10828 7.08862,-13.72658 14.10869,-27.25856 15.60015,-30.07106 1.49145,-2.81251 4.56302,-8.69319 6.8257,-13.0682 10.86796,-21.01373 13.18337,-24.20083 20.36125,-28.0266 5.44794,-2.90372 8.23981,-3.55354 16.80319,-3.91105 l 7.89771,-0.32971 -6.4158,12.44049 c -3.52869,6.84228 -7.49545,14.48596 -8.81503,16.98596 -2.87755,5.45164 -9.48413,18.22676 -17.04228,32.95458 -3.04706,5.9375 -6.88164,13.35228 -8.52129,16.47728 -1.63964,3.12501 -5.22353,10.02842 -7.96418,15.34093 -11.1797,21.67082 -12.95154,24.58568 -18.75492,30.85387 -2.04783,2.21185 -5.6541,5.47468 -8.01394,7.25075 l -4.29062,3.22921 4.57545,2.44472 c 9.46902,5.05941 14.02166,9.07727 22.42387,19.78987 3.21567,4.0999 9.53756,12.15197 14.04863,17.89349 4.51107,5.74152 10.82212,13.7955 14.02455,17.89774 3.20243,4.10224 7.44301,9.50408 9.42351,12.00408 9.54691,12.05114 14.50615,18.35948 15.89734,20.22203 l 1.52387,2.0402 -1.50332,0.68496 c -5.02342,2.28883 -13.54972,2.91929 -20.25774,1.49792 -4.28134,-0.90718 -10.65404,-4.08918 -14.13281,-7.05677 -1.24425,-1.06142 -5.73864,-6.43074 -9.98752,-11.93183 -25.95628,-33.60593 -34.88035,-44.90035 -36.82907,-46.61135 -8.06502,-7.08118 -19.20966,-11.57473 -32.47712,-13.09486 -5.35022,-0.61301 -21.74119,-0.79812 -21.74119,-0.24553 0,0.35298 16.26658,31.85641 18.4568,35.74521 0.70401,1.25 3.26873,6.10796 5.69938,10.79547 2.43065,4.6875 6.6502,12.74148 9.37679,17.89774 2.72658,5.15625 5.65012,10.74956 6.49674,12.42958 l 1.53932,3.05457 -8.42655,-0.28957 c -10.02016,-0.34434 -12.7064,-1.06235 -18.51883,-4.94994 -6.5953,-4.41121 -8.80683,-7.65704 -20.33599,-29.84693 -2.92257,-5.62501 -6.9279,-13.29547 -8.90072,-17.04547 -1.97282,-3.75 -6.07576,-11.60715 -9.11764,-17.46033 l -5.53069,-10.64214 -27.98298,-0.0113 -27.98298,-0.0113 v 23.85215 c 0,27.27793 0.0148,27.38248 4.23732,29.85702 l 2.39662,1.40451 h 25.63236 c 16.51799,0 26.70299,0.22326 28.64329,0.62789 8.93052,1.86234 15.46953,7.35142 20.23475,16.98576 1.62293,3.28125 2.94985,6.28552 2.94871,6.67614 -0.003,1.10954 -86.61291,0.95144 -90.76092,-0.16567 z" id="path1"></path>
  </g>
</svg>
    </a>

		<?php elseif ( has_custom_logo() && get_theme_mod( 'minimalio_mobile-logo-settings' ) ) : ?>

			<span class="header__logo-desktop">
				<?php the_custom_logo(); ?>
			</span>
			<a class="header__logo-link-mobile" href="<?php echo esc_url( home_url() ); ?>"
			title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<img src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'minimalio_mobile-logo-settings' ), 'full' ); ?>"
					alt="mobile-logo" class="header__logo-mobile header__logo-mobile--<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			</a>

		<?php else : ?>

			<?php the_custom_logo(); ?>

		<?php endif; ?>
		<!-- end custom logo -->
	</div><!-- end header col left -->
	<div class="flex flex-wrap items-center w-auto p-0 header__col-right">
		<!-- The WordPress Main Menu goes here -->
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				[
					'theme_location'  => 'primary',
					'container'       => 'nav',
					'container_class' => $minimalio_class . ' header__main-menu-' . $weight,
					'walker'          => new Minimalio_BemNavWalker(),
					'items_wrap'      => '<ul class="flex flex-wrap justify-end m-0 align-middle header__menu gap-x-8">%3$s</ul>',
					'bem_block'       => 'nav',
					'before_ul'       => '<div class="absolute invisible w-full p-4 mx-auto my-0 text-left -translate-x-4 bg-white opacity-0 header__submenu-wrap max-w-72 -z-10">',
					'after_ul'        => '</div>',
				]
			);
		}

		if ( has_nav_menu( 'secondary' ) ) {
			wp_nav_menu(
				[
					'theme_location'  => 'secondary',
					'container_class' => $minimalio_class . ' header__secondary-menu-' . $weight,
					'walker'          => new Minimalio_BemNavWalker(),
					'items_wrap'      => '<ul class="flex flex-wrap justify-end m-0 align-middle header__menu header__secondary__menu gap-x-8">%3$s</ul>',
					'bem_block'       => 'nav',
					'before_ul'       => '<div class="absolute invisible w-full p-4 mx-auto my-0 text-left -translate-x-4 bg-white opacity-0 header__submenu-wrap max-w-72 -z-10">',
					'after_ul'        => '</div>',
				]
			);
		}
		?>

		<?php if ( function_exists( 'pll_the_languages' ) ) :
			$pll_langs = pll_the_languages( [ 'raw' => 1 ] );
			if ( $pll_langs ) : ?>
			<div class="language-switcher hidden lg:flex items-center gap-1 text-sm mr-4">
				<?php
				$i = 0;
				foreach ( $pll_langs as $lang ) :
					if ( $i++ > 0 ) echo '<span class="opacity-30">/</span>';
					if ( $lang['current_lang'] ) : ?>
						<span class="font-semibold"><?php echo esc_html( strtoupper( $lang['slug'] ) ); ?></span>
					<?php else : ?>
						<a href="<?php echo esc_url( $lang['url'] ); ?>" class="opacity-50 hover:opacity-100 transition-opacity"><?php echo esc_html( strtoupper( $lang['slug'] ) ); ?></a>
					<?php endif;
				endforeach; ?>
			</div>
		<?php endif; endif; ?>

		<span class="flex flex-wrap justify-end gap-2 social__block header__social-block">
		<?php if ( $social_enable === 'header' || $social_enable === 'both' ) : ?>
			<?php if ( $socials = minimalio_get_social_links() ) : ?>

				<?php foreach ( $socials as $social => $url ) : ?>

				<a class="socials__link <?php echo $social_media_style; ?> relative w-5 h-5 block socials__link--<?php echo $social; ?>" aria-label="<?php echo $social; ?>" target="_blank" href="<?php echo $url; ?>">
												<?php
												echo minimalio_get_svg( $social . $social_media_style, [
													'role' => 'presentation',
													'title' => $social,
													'class' => 'socials__icon w-full h-full object-fill socials__icon--' . $social,
												]);
												?>
											</a>

			<?php endforeach; ?>

			<?php endif; ?>
		<?php endif; ?>
		</span>
	</div><!-- end header col right -->
	</div><!-- end wrapper header -->

	<?php if ( is_active_sidebar( 'headerfull' ) ) { ?>
		<!-- header widget -->
		<div class="p-0 header-widget-wrapper">

				<?php dynamic_sidebar( 'headerfull' ); ?>

			</div>
		<!-- end header widget -->	
		<?php } ?>


</div><!-- #wrapper-navbar end -->
