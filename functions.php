<?php

function pita_wm_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'pita_wm' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'pita-thumbnail-370x267', 370, 267, array( 'center', 'center' ) );
	add_image_size( 'pita-thumbnail-370x313', 370, 313, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'  => esc_html__( 'Primary Menu', 'pita_wm' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'video',
	) );

}
add_action( 'after_setup_theme', 'pita_wm_setup' );

/**
 * Enqueue scripts and styles.
 */
function pita_wm_scripts() {

	/* CSS files */
	wp_enqueue_style( 'pita_wm-fonts-googleapis', 'http://fonts.googleapis.com/css?family=Arvo:400,400italic%7CMontserrat:400,700', array() );
	wp_enqueue_style( 'pita_wm-bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-main-style', get_template_directory_uri(). '/assets/css/main-style.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-icomoon', get_template_directory_uri(). '/assets/css/icomoon.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-animate', get_template_directory_uri(). '/assets/css/animate.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-magnific-popup', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-color-2', get_template_directory_uri(). '/assets/css/color/color-2.css', array(), '4.9.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'pita_wm-style', get_stylesheet_uri() );

	/* Javascript files */
	wp_enqueue_script( 'pita_wm-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-load-project', get_template_directory_uri() . '/assets/js/ajax-load-project.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-YTPlayer', get_template_directory_uri() . '/assets/js/jquery.mb.YTPlayer.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-owl-carousel', get_template_directory_uri() . '/assets/js/jquery.owl.carousel.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-autosize', get_template_directory_uri() . '/assets/js/jquery.autosize.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-hoverdir', get_template_directory_uri() . '/assets/js/jquery.hoverdir.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-wow', get_template_directory_uri() . '/assets/js/jquery.wow.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-form', get_template_directory_uri() . '/assets/js/jquery.form.js', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-maps', 'http://maps.google.com/maps/api/js?sensor=false', array( 'jquery' ), '4.9.1', true );
	wp_enqueue_script( 'pita_wm-custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array( 'jquery' ), '4.9.1', true );

}
add_action( 'wp_enqueue_scripts', 'pita_wm_scripts' );

add_action( 'widgets_init', 'pita_theme_slug_widgets_init' );
function pita_theme_slug_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'pita_wm' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

include 'inc/required-plugins.php';
