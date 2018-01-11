<?php
/**
 *  Setup theme 
 */
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
 *  register sidebar
 */

add_action( 'widgets_init', 'pita_theme_slug_widgets_init' );
function pita_theme_slug_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Right', 'pita_wm' ),
		'id' => 'pita_wm_1',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
