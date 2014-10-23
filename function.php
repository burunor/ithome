<?php


function ithome_enqueue_styles(){
	wp_enqueue_styles( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'ithome_enqueue_styles', PHP_INT_MAX );