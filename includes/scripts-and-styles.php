<?php

use MyTheme\AssetResolver;

add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	wp_register_style( 'app', AssetResolver::resolve( 'css/app.css' ), [], false );
	wp_register_script( 'app', AssetResolver::resolve( 'js/app.js' ), [], false, true );

	// enqueue global assets
	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true ) ;
	wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true );
	wp_enqueue_style( 'locomotive-css', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.css', [], false, );
	wp_enqueue_script( 'locomotive-js', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.min.js', array(), false, true );

	
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'app' );
	wp_enqueue_script( 'app' );

} );