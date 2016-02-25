<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/my-slider/my-slider.css' );
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css');
    wp_enqueue_script( 'my-slider', get_stylesheet_directory_uri() . '/my-slider/my-slider.js' );
}

function tpl() {
    echo get_stylesheet_directory_uri();
}