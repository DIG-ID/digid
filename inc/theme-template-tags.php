<?php
/**
 * The custom theme tags file.
 */



/**
 * Get our socials from the theme customizer and display them.
 */
function digid_theme_socials() {
	echo '<div class="socials-wrapper">';
	$facebook_url  = get_theme_mod( 'facebook_url' );
	$linkedin_url  = get_theme_mod( 'linkedin_url' );
	$instagram_url = get_theme_mod( 'instagram_url' );
	if ( ! empty( $facebook_url ) ) :
		echo '<a href="' , esc_url( $facebook_url ) , '" target="_blank" class="social-link social-link__facebook">Facebook</a>';
	endif;
	if ( ! empty( $instagram_url ) ) :
		echo '<a href="' , esc_url( $instagram_url ) , '" target="_blank" class="social-link social-link__instagram">Instagram</a>';
	endif;
	if ( ! empty( $linkedin_url ) ) :
		echo '<a href="' , esc_url( $linkedin_url ) , '" target="_blank" class="social-link social-link__linkedin">LinkedIn</a>';
	endif;
	echo '</div>';
}

add_action( 'socials', 'digid_theme_socials' );


/**
 * This function open the scroll wrapper.
 */
function theme_scroll_wrapper_open() {
	?>
	<div class="scroll-wrapper">
	<?php
}

add_action( 'scroll_wrapper_open', 'theme_scroll_wrapper_open' );

/**
 * This function closes the scroll wrapper.
 */
function theme_scroll_wrapper_close() {
	?>
	</div><!-- .scroll-wrapper -->
	<?php
}

add_action( 'scroll_wrapper_close', 'theme_scroll_wrapper_close' );


/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );

/**
 * This function gets the current project related service.
 */
function digid_get_related_services() {
	if ( is_archive( 'projects' ) ) :
		$pod = pods( 'projects', get_the_id() );
	else :
		$pod = pods( 'case_studies', get_the_id() );
	endif;
	$rpods = $pod->field( 'related_services' );
	if ( ! empty( $rpods ) ) :
		$rnames = array();
		foreach ( $rpods as $rpod ) :
			$rpod_id  = $rpod['ID'];
			$rnames[] = get_post_field( 'post_name', $rpod_id  );
		endforeach;
		$rnames = esc_attr( implode( ' ', $rnames ) );
		return $rnames;
	endif;
}

/**
 * This function gets the current post related categorie.
 */
function digid_get_related_categories() {
	$c = get_the_category( get_the_id() );
	if ( $c ) :
		$cnames = array();
		foreach ( $c as $c_id ) :
			$cnames[] = $c_id->slug;
		endforeach;
		$cnames = esc_attr( implode( ' ', $cnames ) );
		return $cnames;
	endif;
}

/**
 * Get the page H1 text: the ACF "SEO H1" field, falling back to the page/archive title.
 *
 * @param string $fallback Optional text used when the SEO H1 field is empty.
 * @return string Plain text (not escaped).
 */
function digid_get_seo_h1( $fallback = '' ) {
	$seo_h1  = '';
	$default = '';

	if ( is_home() ) :
		$page_id = (int) get_option( 'page_for_posts' );
		$seo_h1  = function_exists( 'get_field' ) ? get_field( 'seo_h1', $page_id ) : '';
		$default = get_the_title( $page_id );
	elseif ( is_post_type_archive( array( 'services', 'case_studies', 'jobs' ) ) ) :
		$post_type = get_query_var( 'post_type' );
		$post_type = is_array( $post_type ) ? reset( $post_type ) : $post_type;
		$seo_h1    = function_exists( 'get_field' ) ? get_field( $post_type . '_archive_seo_h1', 'option' ) : '';
		$default   = post_type_archive_title( '', false );
	elseif ( is_category() ) :
		$default = single_cat_title( '', false );
	else :
		$seo_h1  = function_exists( 'get_field' ) ? get_field( 'seo_h1' ) : '';
		$default = get_the_title();
	endif;

	if ( ! empty( $seo_h1 ) ) :
		return $seo_h1;
	endif;

	return $fallback ? $fallback : $default;
}

/**
 * Output the hero breadcrumb with the current-page crumb rendered as the page <h1>.
 *
 * The last crumb shows the SEO H1 text; the rest of the trail stays unchanged.
 * Falls back to a plain <h1 class="section__title"> when Yoast is not active
 * or the trail has no "last" crumb.
 *
 * @param string $h1_text Optional H1 text. Defaults to digid_get_seo_h1().
 */
function digid_hero_breadcrumb_h1( $h1_text = '' ) {
	$h1_text = $h1_text ? $h1_text : digid_get_seo_h1();

	$breadcrumb = '';
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		$to_h1 = function ( $link_output ) use ( $h1_text ) {
			if ( false === strpos( $link_output, 'breadcrumb_last' ) ) :
				return $link_output;
			endif;
			return '<h1 class="breadcrumb_last" aria-current="page">' . esc_html( $h1_text ) . '</h1>';
		};
		$to_div = function () {
			return 'div';
		};
		add_filter( 'wpseo_breadcrumb_single_link', $to_h1, 99 );
		add_filter( 'wpseo_breadcrumb_output_wrapper', $to_div, 99 );
		// <div> wrappers instead of <p>/<span>: neither may contain an <h1>.
		$breadcrumb = yoast_breadcrumb( '<div id="breadcrumbs">', '</div>', false );
		remove_filter( 'wpseo_breadcrumb_single_link', $to_h1, 99 );
		remove_filter( 'wpseo_breadcrumb_output_wrapper', $to_div, 99 );
	endif;

	if ( $breadcrumb && false !== strpos( $breadcrumb, '<h1' ) ) :
		echo '<nav class="section__title" aria-label="Breadcrumb">' . $breadcrumb . '</nav>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Yoast output, H1 text escaped above.
	else :
		echo '<h1 class="section__title">' . esc_html( $h1_text ) . '</h1>';
	endif;
}
