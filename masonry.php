<?php
/*
Plugin Name: Masonry
Description: A plugin to enqueue Masonry CSS on the frontend.
Version: 1.0
Author: Wojtek Naruniec
*/

// Enqueue Masonry CSS on the frontend
function masonry_enqueue_script() {
	wp_enqueue_style(
		'masonry-style',
		plugins_url( 'style.css', __FILE__ ),
		array(),
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'masonry_enqueue_script' );
