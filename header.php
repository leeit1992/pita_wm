<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- IE9-10 fix -->
    <!--[if IE 9]><link rel="stylesheet" type="text/css" href="css/ie9-10.css" media="screen" /><!--[endif]-->
    <!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]-->
    <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> <![endif]-->
    <?php wp_head(); ?>
</head>
<body onload="hide_preloader();" <?php body_class('home'); ?>>
<!-- Page wrap -->
<div id="page-wrap">
	<!-- Preloader -->

    <div id="preloader">

        <div class="inner">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">

        </div>

    </div>

    <!-- End / Preloader -->

    <?php if ( is_home() ): ?>
        <!-- Video fixed -->

        <div id="video-fixed">
            <div id="video-custom">
                <a id="video" class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=RdIh8GiVR9I',containment:'#video-custom', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, addRaster:false, quality:'default'}"></a>
            </div>
        </div>

        <!-- End / Video fixed -->
    <?php else: ?>
        <nav id="navigation" class="nav-ver1 nav-static">
        
            <div class="container">
                <div class="row">
            
                    <div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></div>
            
                    <div class="menu-mobile"><p>Menu</p></div>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary'
        ) );
        ?>
                </div>
            </div>
        
        </nav>
    <?php endif ?>
