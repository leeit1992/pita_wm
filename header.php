<?php 
global $pita_wm_option;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
</head>
<body onload="hide_preloader();">
<!-- Page wrap -->
<div id="page-wrap">
	<!-- Preloader -->
    <div id="preloader">
        <div class="inner">
            <img src="<?php echo isset( $pita_wm_option['pita_wm-preloader'] ) ? $pita_wm_option['pita_wm-preloader']['url'] : ''; ?>" alt="Image preloader">
        </div>

    </div>
    <!-- End / Preloader -->
    <?php if ( is_front_page() ): ?>
        <!-- Video fixed -->
        <div id="video-fixed">
            <div id="video-custom">
                <a id="video" class="player" title="Video fixed" data-property="{videoURL:'<?php echo isset( $pita_wm_option['pita_wm-video-fixed'] ) ? $pita_wm_option['pita_wm-video-fixed'] : ''; ?>',containment:'#video-custom', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, addRaster:false, quality:'default'}"></a>
            </div>
        </div>
        <!-- End / Video fixed -->
    <?php else: ?>
        <nav id="navigation" class="nav-ver1 nav-static">
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>" title="logo menu">
                            <img src="<?php echo isset( $pita_wm_option['pita_wm-logo'] ) ? $pita_wm_option['pita_wm-logo']['url'] : ''; ?>" alt="logo menu">
                        </a>
                    </div>
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
