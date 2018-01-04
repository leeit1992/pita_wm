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
