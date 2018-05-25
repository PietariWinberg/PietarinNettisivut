<?php


// style css
function eins_theme_enqueue_styles() {
	wp_enqueue_style( 'eins-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'eins-child-style',
        get_stylesheet_directory_uri() . '/style.css',
			array('eins-parent-style')
    );
}
add_action( 'wp_enqueue_scripts', 'eins_theme_enqueue_styles' );


// setting header images
function eins_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '555555',
		'default-image'          => get_stylesheet_directory_uri() . '/images/headers/header.png',

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'twentythirteen_header_style',
		'admin-head-callback'    => 'twentythirteen_admin_header_style',
		'admin-preview-callback' => 'twentythirteen_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'eins_custom_header_setup', 11 );


// setting thumbnail
function eins_twentythirteen_setup_child () {
	set_post_thumbnail_size();
}
add_action( 'after_setup_theme', 'eins_twentythirteen_setup_child', 32);


