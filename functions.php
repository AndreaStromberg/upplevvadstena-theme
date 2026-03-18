<?php

/**
 * Theme Support
 */
add_theme_support('post-thumbnails');

/**
 * Script and Styles
 */

function uv_script_and_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    add_editor_style('style.css');
}

add_action('enqueue_block_assets', 'uv_script_and_styles');

function uv_script()
{
    // Register the script like this for a theme:
    // wp_register_script('main-script', get_template_directory_uri() . '/main.js');
    // wp_enqueue_script('main-script');
    wp_enqueue_script('tyc_scripts', get_theme_file_uri('/main.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'uv_script');
