<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" title="" href="<?php echo __BASE_URL__ ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo __BASE_URL__ ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo __BASE_URL__ ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo __BASE_URL__ ?>/css/style-top.css">
    <link rel="stylesheet" type="text/css" title="" href="<?php echo __BASE_URL__ ?>/css/responsive-top.css">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <script type="text/javascript" src="<?php echo __BASE_URL__ ?>/js/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		
	</header>
