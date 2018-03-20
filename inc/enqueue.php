<?php

/**
 * Enqueue scripts and styles.
 */
function pita_wm_scripts() {

	/* CSS files */
	wp_enqueue_style( 'pita_wm-fonts-googleapis', 'http://fonts.googleapis.com/css?family=Arvo:400,400italic%7CMontserrat:400,700', array() );
	wp_enqueue_style( 'pita_wm-bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-main-style', get_template_directory_uri(). '/assets/css/main-style.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-blog', get_template_directory_uri(). '/assets/css/blog.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-icomoon', get_template_directory_uri(). '/assets/css/icomoon.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-animate', get_template_directory_uri(). '/assets/css/animate.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-magnific-popup', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-color-2', get_template_directory_uri(). '/assets/css/color/color-2.css', array(), '4.9.1' );
	wp_enqueue_style( 'pita_wm-add-codeshort', get_template_directory_uri(). '/assets/css/add-shortcode.css', array(), '4.9.1' );


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
