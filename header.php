<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gisikurath
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.2.min.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/functions.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/responsiveslides.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/jquery.lazyload.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/jquery.scrollstop.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/backgroundCheck.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/responsiveslides.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/themes/themes.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/animate.css">

<style type="text/css">.fixed {left: 0;position: absolute;top: 0;width: 50%;}.fixed-nav {position: absolute;left: 50%;top: 47px;width: 280px;margin-left: -140px;text-align: center;}.fixed-nav.background--dark .fixed-nav-line {background: #fff;}.fixed-nav.background--dark .fixed-nav-logo {color: #fff;}.fixed-nav.background--dark .fixed-nav-no {color: #fff;}.fixed-nav.background--dark .fixed-nav-name {color: #fff;}.fixed-nav-line,.fixed-nav-logo {display: inline-block;vertical-align: middle;margin: 0;padding: 0;}.fixed-nav-line {width: 40px;height: 3px;background: #222;}.fixed-nav-logo {height: 28px;font-size: 25px;font-weight: bold;text-align: center;}</style>
      <script type="text/javascript"> /* global BackgroundCheck:false */window.addEventListener('DOMContentLoaded', function () {BackgroundCheck.init({targets: '.fixed-nav'});});function readURL(input) {if (input.files && input.files[0]) { var reader = new FileReader(); reader.onload = function(e) { $('#previewHolder').attr('src', e.target.result); //alert(e.target.result); } reader.readAsDataURL(input.files[0]);}}window.onload = function(){$('#previewHolder').attr('src','Winter.jpg');$("#filePhoto").change(function() { readURL(this);});}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gisikurath' ); ?></a>



	<div id="content" class="site-content">
