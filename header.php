<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package materialwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>  style="min-height: 100%; height: 100%">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<link href='//fonts.googleapis.com/css?family=RobotoDraft:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  style="min-height: 100%; height: 100%">
<div id="page" class="hfeed site" style="min-height: 100%; height: 100%">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'materialwp' ); ?></a>
	
	<img src="http://faizmalkani.com/images/material_cover.png" style="width: 100%; height: 50%; object-fit: cover !important; position: absolute">

	<!-- #masthead -->

	<div id="content" class="site-content">