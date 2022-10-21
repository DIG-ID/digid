<?php
/**
 * Setup theme
 */
function digid_theme_setup() {

	register_nav_menus(
		array(
			'main' => __( 'Main Menu', 'digid' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

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
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
	/*if ( is_page_template( array( 'page-templates/page-home.php', 'page-templates/page-contact.php' ) ) ) :
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfZm2mgcrwPZBLQO2YhYFlM2GKqLOZsM', array(), $theme_version, true );
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'digid_theme_enqueue_styles' );


// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';
