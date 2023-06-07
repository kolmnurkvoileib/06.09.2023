<?php

//CUSTOM CSS AND JS

function mike_script_enqueue()
{
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/include/slick/slick.css', array(), null, 'all');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/include/slick/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/dist/css/style.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/dist/css/style.min.css'), 'all');
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/dist/js/main.min.js', array(), filemtime(get_stylesheet_directory() . '/assets/dist/js/main.min.js'), true);

    // Dequeue default jquery and add new
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/include/jQuery/jquery.min.js', array(), null, false);
}

add_action('wp_enqueue_scripts', 'mike_script_enqueue');

//MENUS

function mike_theme_setup()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'image', 'video'));
    register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'mike_theme_setup');


//Custom-Logo

add_theme_support('custom-logo');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');


