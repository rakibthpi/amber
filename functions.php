<?php 

// Amber setup theme area start 
add_action('after_setup_theme','amber_setup_theme');
function amber_setup_theme(){

	add_theme_support('title-tag');

}


// Css and Js link area start 
add_action('wp_enqueue_scripts','js_css_link');
function js_css_link(){

	// Style Main area start 
	wp_register_style('normalize',get_template_directory_uri().'/assets/css/normalize.css');
	wp_register_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_register_style('asPieProgress',get_template_directory_uri().'/assets/css/asPieProgress.css');
	wp_register_style('owl-carousel-css',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_register_style('owl-theme-default',get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
	wp_register_style('fontawesome-css',get_template_directory_uri().'/assets/css/fontawesome.min.css');
	wp_register_style('bootstrap-min-css',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_register_style('main-style',get_template_directory_uri().'/assets/css/style.css');
	wp_register_style('main-responsive',get_template_directory_uri().'/assets/css/responsive.css');


	wp_enqueue_style('normalize');
	wp_enqueue_style('magnific-popup');
	wp_enqueue_style('asPieProgress');
	wp_enqueue_style('owl-carousel-css');
	wp_enqueue_style('owl-theme-default');
	wp_enqueue_style('fontawesome-css');
	wp_enqueue_style('bootstrap-min-css');
	wp_enqueue_style('main-style');
	wp_enqueue_style('main-responsive');
	// Style Main area start 

	// Script main js link area 
	 // wp_register_script('jquery-js',get_template_directory_uri().'/assets/js/jquery.min.js');




	 wp_enqueue_script('jquery');


}


