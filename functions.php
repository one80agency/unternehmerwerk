<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function unternehmerwerk_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    register_nav_menus(
        array(
            'primary' => 'Hauptnavigation',
            'footer'  => 'Footer Navigation',
        )
    );
}
add_action( 'after_setup_theme', 'unternehmerwerk_setup' );

function unternehmerwerk_enqueue_assets() {
    wp_enqueue_style(
        'unternehmerwerk-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'unternehmerwerk_enqueue_assets' );
