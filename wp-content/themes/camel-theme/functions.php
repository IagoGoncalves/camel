<?php

require get_template_directory() . '/inc/customizer.php';

function camel_load_scripts(){
    wp_enqueue_style( 'camel-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap', array(), null );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'camel_load_scripts' );

function camel_config(){

    $textdomain = 'wp-devs';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    register_nav_menus(
        array(
            'wp_devs_main_menu' => esc_html__( 'Main Menu', 'wp-devs' ),
            'wp_devs_footer_menu' => esc_html__( 'Footer Menu', 'wp-devs' )
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'camel_config', 0 );

add_action('init', 'camel_register_post_type');
function camel_register_post_type(){
    require get_template_directory() . '/custom-post.php';
}

if ( ! function_exists( 'wp_body_open' ) ){
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}