<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

function enqueue_blog_assets() {
    // Check if the current page is the homepage "Advait"
    if ( is_page( 'Advait' ) || is_front_page() ) {
        // Enqueue CSS file
        $stylesheet_uri = get_stylesheet_directory_uri() . '/style.css';
        $stylesheet_version = filemtime( get_stylesheet_directory() . '/style.css' );
        wp_enqueue_style( 'blog_styles', $stylesheet_uri, array(), $stylesheet_version );
		
		$gsap_uri = get_stylesheet_directory_uri() . '/gsap.min.js';
        $gsap_version = filemtime( get_stylesheet_directory() . '/gsap.min.js' );
        wp_enqueue_script( 'gsap_js', $gsap_uri, array(), $gsap_version, true );

        // Enqueue ScrollTrigger
        $scrolltrigger_uri = get_stylesheet_directory_uri() . '/ScrollTrigger.min.js';
        $scrolltrigger_version = filemtime( get_stylesheet_directory() . '/ScrollTrigger.min.js' );
        wp_enqueue_script( 'scrolltrigger_js', $scrolltrigger_uri, array('gsap_js'), $scrolltrigger_version, true );
		
		 // Enqueue imagesLoaded
        $imagesloaded_uri = get_stylesheet_directory_uri() . '/imagesloaded.pkgd.min.js';
        $imagesloaded_version = filemtime( get_stylesheet_directory() . '/imagesloaded.pkgd.min.js' );
        wp_enqueue_script( 'imagesloaded_js', $imagesloaded_uri, array(), $imagesloaded_version, true );

        // Enqueue JavaScript file
        $script_uri = get_stylesheet_directory_uri() . '/scripts.js';
        $script_version = filemtime( get_stylesheet_directory() . '/scripts.js' );
        wp_enqueue_script( 'blog_custom_js', $script_uri, array(), $script_version, true ); // The last argument (true) loads the script in the footer
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_blog_assets' );

{/*
function enqueue_blog_assets() {
    // Check if the current page is the homepage "Advait"
    if ( is_page( 'Advait' ) || is_front_page() ) {
        // Enqueue CSS file
        $stylesheet_uri = get_stylesheet_directory_uri() . '/style.css';
        $stylesheet_version = filemtime( get_stylesheet_directory() . '/style.css' );
        wp_enqueue_style( 'blog_styles', $stylesheet_uri, array(), $stylesheet_version );

		{/*  // Enqueue GSAP
        $gsap_uri = get_stylesheet_directory_uri() . '/gsap.min.js';
        $gsap_version = filemtime( get_stylesheet_directory() . '/gsap.min.js' );
        wp_enqueue_script( 'gsap_js', $gsap_uri, array(), $gsap_version, true );

        // Enqueue ScrollTrigger
        $scrolltrigger_uri = get_stylesheet_directory_uri() . '/ScrollTrigger.min.js';
        $scrolltrigger_version = filemtime( get_stylesheet_directory() . '/ScrollTrigger.min.js' );
        wp_enqueue_script( 'scrolltrigger_js', $scrolltrigger_uri, array('gsap_js'), $scrolltrigger_version, true );

        // Enqueue Lenis
        $lenis_uri = get_stylesheet_directory_uri() . '/lenis.min.js';
        $lenis_version = filemtime( get_stylesheet_directory() . '/lenis.min.js' );
        wp_enqueue_script( 'lenis_js', $lenis_uri, array(), $lenis_version, true );

        // Enqueue imagesLoaded
        $imagesloaded_uri = get_stylesheet_directory_uri() . '/imagesloaded.pkgd.min.js';
        $imagesloaded_version = filemtime( get_stylesheet_directory() . '/imagesloaded.pkgd.min.js' );
        wp_enqueue_script( 'imagesloaded_js', $imagesloaded_uri, array(), $imagesloaded_version, true );
		

        // Enqueue custom script (assuming it uses the above libraries)
        $script_uri = get_stylesheet_directory_uri() . '/scripts.js';
        $script_version = filemtime( get_stylesheet_directory() . '/scripts.js' );
        wp_enqueue_script( 'blog_custom_js', $script_uri, array('gsap_js', 'scrolltrigger_js', 'lenis_js', 'imagesloaded_js'), $script_version, true );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_blog_assets' );
*/}

