<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts' );

function theme_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/style.css') );
    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/assets/node_modules/swiper/swiper-bundle.min.css', array() );
    
    wp_enqueue_script( 'animation-script', get_stylesheet_directory_uri() . '/animation.js', array(), null, true );
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/assets/node_modules/swiper/swiper-bundle.min.js', array(), '9.2', true );
}


if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value;
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}