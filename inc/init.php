<?php

if ( ! function_exists( 'itc_theme_setup' ) ) :
	function itc_theme_setup() {
		/**
		 * Support woocommerce plugin for theme
		 */
		add_theme_support( 'woocommerce' );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Override default image sizes and add custom sizes
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_image_size
		 */
		if ( function_exists( 'add_image_size' ) ) {
			add_image_size( 'main_slider', 960, 300, true );
			add_image_size( 'product', 400, 300, true );
			add_image_size( 'post_fullwidth', 990, 400, true );
			add_image_size( 'post_fullwidth_bew', 1000, 200, true );
		}

		/**
		 * This theme uses wp_nav_menu() in one location.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
		 */
		register_nav_menus( array(
			'main_menu'  => __( 'Main Menu', 'itcthemes' ),
			'mobile_menu'  => __( 'Mobile Menu', 'itcthemes' ),
		) );

	}

	add_action( 'after_setup_theme', 'itc_theme_setup' );

endif;

/**
 * Enqueue scripts and styles for the front end.
 * 
 */
function itc_enqueue_scripts() {
	// Load our main stylesheet.
	
}
add_action( 'wp_enqueue_scripts', 'itc_enqueue_scripts', 10000 );
// wp_enqueue_script('jquery');

function add_stylesheet_to_admin() {

    // Load FontAwesome stylesheet.
	wp_enqueue_style( 'FontAwesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.css' );
}
add_action( 'admin_enqueue_scripts', 'add_stylesheet_to_admin' );

/**
 * Additions field for advanced custom fields.
 */
if( class_exists('acf') ) {
	require(get_template_directory() . '/inc/acf.php');
	require(get_template_directory() . '/inc/colors.php');
	require(get_template_directory() . '/inc/layouts.php');
}

/**
 * Add Plugin PHP resize images
 */
require get_template_directory() . '/inc/BFI_Thumb.php';

/**
 * Additions custom widgets wordpress
 */
// require get_template_directory() . '/inc/widgets/custom-widget.php';

/**
 * Additions custom post type wordpress
 */
// require get_template_directory() . '/inc/widgets/custom-post-type.php';

/**
 * Additions function for visual composer.
 */
require get_template_directory() . '/inc/vc.php';

/**
 * Additions custom shortcode wordpress
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Additions function for woocommerce plugin.
 */
if ( class_exists( 'Woocommerce' ) ) {
	require get_template_directory() . '/inc/wc.php';
}

?>