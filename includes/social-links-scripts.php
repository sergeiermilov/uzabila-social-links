<?php 

function uzabila_social_links_add_scripts(){
	wp_enqueue_style( 'uzabila-social-links-style', plugins_url() . '/uzabila-social-links/css/social-links.css' );
	wp_enqueue_script( 'uzabila-social-links-script', plugins_url() . '/uzabila-social-links/js/social-links.js' );
}

add_action( 'wp_enqueue_scripts', 'uzabila_social_links_add_scripts', 10, 1 );