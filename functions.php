<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [] );
    wp_enqueue_style('job-proposal-style', get_theme_file_uri('/assets/job-style.css') );	
    //bootstrap
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );


function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );
