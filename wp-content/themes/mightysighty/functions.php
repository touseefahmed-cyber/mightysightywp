<?php

function enqueue_styles() {

    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css' );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/bootstarp/bootstrap.min.css' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css' );
    wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme-default-min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );
    wp_enqueue_style( 'super-classes', get_template_directory_uri() . '/assets/css/super-classes.css' );
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles');
function enqueue_scripts() {

    wp_enqueue_script( 'jqslim', get_template_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js"' );
    wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/assets/js/popper.min.js' );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js' );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js' );



}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');

function customsidebar_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar Widget Title', '' ),
        'id' => 'dysidebar',
        'description' => __( 'demo description', '' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'customsidebar_widgets_init' );

function register_navwalker(){
	require_once get_template_directory() . '/libs/navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function my_menu_function(){
    register_nav_menus( array(
      'primary' => 'Primary Navigation'
    ));
}
add_action( 'init', 'my_menu_function' );


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
   
    
}
