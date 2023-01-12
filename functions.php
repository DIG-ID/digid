<?php
/**
 * Setup theme
 */
function digid_theme_setup() {

	register_nav_menus(
		array(
			'main'   => __( 'Main Menu', 'digid' ),
			'footer' => __( 'Footer Menu', 'digid' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'card-post-thumbnail', 426, 314, array( 'center', 'center' ) );

	add_image_size( 'card-project-thumbnail-portrait', 646, 733, array( 'center', 'center' ) );

	add_image_size( 'card-project-thumbnail-landscape', 646, 422, array( 'center', 'center' ) );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

}

add_action( 'after_setup_theme', 'digid_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function digid_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}
add_action( 'widgets_init', 'digid_theme_footer_widgets_init' );


if ( ! function_exists( 'digid_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function digid_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Ridley Grotesk';
			font-weight: bold;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.woff2' ) . "') format('woff2'), url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.otf' ) . "') format('otf');
		}

		@font-face{
			font-family: 'Ridley Grotesk';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.woff2' ) . "') format('woff2'), url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.otf' ) . "') format('otf');
		}

		@font-face{
			font-family: 'Ridley Grotesk';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.woff2' ) . "') format('woff2'), url('" . get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.otf' ) . "') format('otf');
		}

		@font-face {
			font-family: 'kobenhavn';
			src:url('https://use.typekit.net/af/516904/00000000000000007735c102/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n1&v=3') format('woff2'),url('https://use.typekit.net/af/516904/00000000000000007735c102/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n1&v=3') format('woff'),url('https://use.typekit.net/af/516904/00000000000000007735c102/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n1&v=3') format('opentype');
			font-display: auto;
			font-style: normal;
			font-weight: 100;
			font-stretch: normal;
		}
			
		@font-face {
			font-family: 'kobenhavn';
			src:url('https://use.typekit.net/af/cf4ae3/00000000000000007735c104/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n2&v=3') format('woff2'),url('https://use.typekit.net/af/cf4ae3/00000000000000007735c104/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n2&v=3') format('woff'),url('https://use.typekit.net/af/cf4ae3/00000000000000007735c104/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n2&v=3') format('opentype');
			font-display: auto;
			font-style: normal;
			font-weight: 200;
			font-stretch: normal;
		}

		";

	}

endif;

if ( ! function_exists( 'digid_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function digid__preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Bold.otf' ) ); ?>" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Medium.otf' ) ); ?>" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/RidleyGrotesk-Light.otf' ) ); ?>" as="font" type="font/otf" crossorigin>
		<link rel="preload" href="https://p.typekit.net/p.css?s=1&k=xvn1tnj&ht=tk&f=37561.37563&a=100534906&app=typekit&e=css" as="font" type="font/woff2" crossorigin>

		<?php
	}

endif;

add_action( 'wp_head', 'digid__preload_webfonts' );

/**
 * Add custom classes to posts body
 */
function custom_body_classes( $classes ) {
	if ( is_single() ) {
		global $post;
		foreach ( ( get_the_category( $post->ID ) ) as $category ) {
			$classes[] = $category->category_nicename;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );


/**
 * Enqueue styles and scripts
 */
function digid_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/main.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', digid_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
	/*if ( is_page_template( array( 'page-templates/page-home.php', 'page-templates/page-contact.php' ) ) ) :
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfZm2mgcrwPZBLQO2YhYFlM2GKqLOZsM', array(), $theme_version, true );
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'digid_theme_enqueue_styles' );

/**
 * Wrap the post thumbnail image in a figure element only in the blog posts and project posts.
 */
function digid_wrap_post_thumbnail_in_figure( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	$allowed_sizes = array( 'card-post-thumbnail', 'card-project-thumbnail-portrait', 'card-project-thumbnail-landscape' );
	if ( ! in_array( $size, $allowed_sizes ) ) :
		return $html;
	endif;
	return '<a href="' . get_the_permalink() . '"><figure>' . $html . '</figure></a>';
}

add_filter( 'post_thumbnail_html', 'digid_wrap_post_thumbnail_in_figure', 10, 5 );

// Theme custom Walker.
require get_template_directory() . '/inc/theme-custom-walker.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// ACF bidirectional-relationships.
require get_template_directory() . '/inc/bidirectional-relationships.php';
