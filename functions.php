<?php

function crayon_files () {
    wp_enqueue_style('crayon_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'crayon_files');

/*
 *
 * @return  
 * @param 
 */
function crayon_features () {
    register_nav_menu('header-menu', 'Header');
    register_nav_menu('footer-menu', 'Footer');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'crayon_features');