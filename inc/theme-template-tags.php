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
	$pod   = pods( 'projects', get_the_id() );
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
