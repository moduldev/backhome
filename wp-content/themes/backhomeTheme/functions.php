<?php
/*
	 ====================================================
		Include scripts
	 ====================================================
 */
	function backhome_script_enqueue() {

		wp_enqueue_style('custom_style', get_template_directory_uri() . '/styles/main.css', array(),'1.0.0', 'all');
		wp_enqueue_style('slick', get_template_directory_uri() . '/styles/slick.css', array(),'1.0.0', 'all');
		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/styles/slick-theme.css', array(),'1.0.0', 'all');
		wp_enqueue_script('slickjs', get_template_directory_uri() . '/js/slick.js',array('jquery'),'1.0.0', true);
		wp_enqueue_script('castom_js', get_template_directory_uri() . '/js/main.js',array('jquery'),'1.0.0', true);


	}
	add_action('wp_enqueue_scripts', 'backhome_script_enqueue') ;
/*
	 ====================================================
		Activate CDN Jquery
	 ====================================================
 */
	function shapeSpace_include_custom_jquery() {

		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

	}
	add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
/*
	 ====================================================
		Activate menu
	 ====================================================
 */

	function backhome_theme_setup() {

		add_theme_support('menus');

		register_nav_menu('primary','Primery header navigation');

	}
	add_action('init','backhome_theme_setup');

/*
	 ====================================================
		Remove js scripts from page-4.php
	 ====================================================
 */
function my_deregister_javascript () {
	if ( is_page ('4') ) {
		wp_deregister_script ( 'slickjs' );
		wp_deregister_script ( 'jquery' ) ;
	}
}
add_action ( 'wp_enqueue_scripts', 'my_deregister_javascript');
/*
	 ====================================================
	    Activate custom background
	 ====================================================
 */
add_theme_support('custom-background');
/*
	 ====================================================
		Activate post thumbnails
	 ====================================================
 */
add_theme_support('post-thumbnails');
/*
	 ====================================================
		Activate search form
	 ====================================================
 */
add_theme_support('html5',array('search-form'));
/*
	 ====================================================
		Activate post formats
	 ====================================================
 */

add_theme_support('post-formats',array('aside','image','video'));
/*
	 ====================================================
		Sidebar function
	 ====================================================
 */
function backhome_widget_setup() {
    register_sidebar(array(
       'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standart sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after-widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}
/*
	 ====================================================
		Activate sidebar
	 ====================================================
 */
add_action('widgets_init','backhome_widget_setup');

