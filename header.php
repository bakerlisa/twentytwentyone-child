<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 *
 * Use style.css to initiate header styles instead of in the header.php
 */
$GLOBALS["address"] = "2148 Broadway Ste. B6 <br/> Grand Junction, CO 81507";
	$GLOBALS["address_link"] = "https://goo.gl/maps/n84vdCAKUfQfXu9Y8";

$GLOBALS["address_two"] = "3841 Grand Mesa </br> Montrose, CO 81403";
	$GLOBALS["address_two_clean"] = "https://goo.gl/maps/3ewTEXLcLE6jpHw2A";

$GLOBALS["phone"] = "970.245.7711";
	$GLOBALS["phone_clean"] = "9702457711";

$GLOBALS["phone_two"] = "970.249.3742";
	$GLOBALS["phone_two_clean"] = "9702493742";


?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="preload" href="<?= site_url(); ?>/wp-content/themes/twentytwentyone-child/template-parts/script.js" as="script">
		<link rel="preload" href="<?= site_url(); ?>/wp-content/themes/twentytwentyone-child/template-parts/animations.css" as='stylesheet'>
		<script src="<?= site_url(); ?>/wp-content/themes/twentytwentyone-child/template-parts/script.js" defer></script>

		<noscript>
			<!-- incase the broswer dose not support js -->
	     	<link rel="stylesheet" type="text/css" href="<?= site_url(); ?>/wp-content/themes/twentytwentyone-child/template-parts/animations.css"/>
		</noscript>
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php
		// Hook that renders the "after opening body tag" scripts
		// in the /pm-safe/after-body-scripts.php
		do_action('after_body'); ?>
		<header class="masthead">
			<a class="skip-bar" href="#main">Skip to Main Content</a>
			<div class="inner-masthead flex">
				<div class="logo-container">
					<a href="<?= home_url(); ?>">
						<img src="<?= wp_get_attachment_image_src('27', 'full')[0]; ?>" alt="site logo" width="281" height="77">
					</a>
				</div>
				<div class="flex menus">
					<input tabindex="-1" type="checkbox" class="mobile-nav-input" id="mobile-nav-input">
					<label tabindex="0" class="mobile-nav" for="mobile-nav-input" onkeyup="checkTheBox(event);">☰</label>
					<nav class="main-nav" aria-label="Main Menu">
						<?php wp_nav_menu(array(
							'menu' => 'Main',
							'menu_class'     => 'main-menu',
						)); ?>
					</nav>
				</div>
			</div>
		</header>