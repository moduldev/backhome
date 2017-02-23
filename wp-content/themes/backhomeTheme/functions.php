<?php

	function backhome_script_enqueue() {

		wp_enqueue_style('custom_style', get_template_directory_uri() . '/styles/main.css', array(),'1.0.0', 'all');
		wp_enqueue_style('slick', get_template_directory_uri() . '/styles/slick.css', array(),'1.0.0', 'all');
		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/styles/slick-theme.css', array(),'1.0.0', 'all');
		wp_enqueue_script('slickjs', get_template_directory_uri() . '/js/slick.js',array('jquery'),'1.0.0', true);
		wp_enqueue_script('castom_js', get_template_directory_uri() . '/js/main.js',array('jquery'),'1.0.0', true);


	}
	add_action('wp_enqueue_scripts', 'backhome_script_enqueue') ;
	function shapeSpace_include_custom_jquery() {

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

	}
	add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

	function backhome_theme_setup() {

		add_theme_support('menus');

		register_nav_menu('primary','Primery header navigation');

	}
	add_action('init','backhome_theme_setup');


function my_deregister_javascript () {
	if ( is_page ('4') ) {
		wp_deregister_script ( 'slickjs' );
		wp_deregister_script ( 'jquery' ) ;
	}
}
add_action ( 'wp_enqueue_scripts', 'my_deregister_javascript');
