<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js">
</script>
    <?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
	<div class="cursor"></div>
<div class="cursor2"></div>
<section class="Custom-header">
	<div class="left-box">
		<a href="/">
			<img class="logo-class cursor-scale" src="https://advaitlabs.com/wp-content/uploads/2024/07/new-adv-logo.png" alt="">
			</a>
	</div>
	<div class="right-box">
		   <nav>
        <button id="toggleButton" class="circle">
            <div id="toggleButtonLine1"></div>
            <div id="toggleButtonLine2"></div>
        </button>
        <ul class="menu cursor-scale">
            <li><a href="#">Home</a> <span>&#9679;</span></li>
            <li><a href="#">About</a><span>&#9679;</span></li>
            <li><a href="#">Services</a><span>&#9679;</span></li>
            <li><a href="#">Products</a><span>&#9679;</span></li>
            <li><a href="#">Blogs</a><span>&#9679;</span></li>
            <li><a href="#">Contact</a><span>&#9679;</span></li>
        </ul>
    </nav>
	</div>
 
</section>

<?php // Your content starts here ?>
