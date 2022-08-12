<?php

function cde_theme_enqueue_style() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/styles/bootstrap.css', false );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/styles/common.css', false );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/styles/blog-list.css', false );
}

function cde_theme_enqueue_script() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/scripts/common.js', false );
}
 
add_action( 'wp_enqueue_scripts', 'cde_theme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'cde_theme_enqueue_script' );
