<?php

function addrian_setup () {
    load_theme_textdomain('addrian');

    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 200,
        'flex-height' => true
    ));
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(730, 446);
    add_theme_support('html5', array(
        'search-form',
        'comment-from',
        'comment-list',
        'gallery',
        'caption'
    ));

    add_theme_support('posts-formats', array(
        'aside',
        'image',
        'video',
        'gallery'
    ));

    register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'addrian_setup');


function addrian_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
//    wp_enqueue_style( 'style-import', get_stylesheet_uri() . '/style-import.css');
//    wp_enqueue_style( 'style-rtl', get_stylesheet_uri() . '/style-rtl.css');
//    wp_enqueue_style( 'openpage', get_stylesheet_uri() . '/openpage.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.css" );
    wp_enqueue_style( 'dark', get_template_directory_uri() . "/css/dark.css" );
    wp_enqueue_style( 'travel', get_template_directory_uri() . "/demos/travel/travel.css" );
    wp_enqueue_style( 'font-icons', get_template_directory_uri() . "/css/font-icons.css" );
    wp_enqueue_style( 'animate', get_template_directory_uri() . "/css/animate.css" );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . "/css/magnific-popup.css" );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . "/css/responsive.css" );

    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array(), false, true );
    wp_enqueue_script( 'formail', get_template_directory_uri() . '/formail.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.lazyload', get_template_directory_uri() . 'jquery.lazyload.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'addrian_scripts' );
