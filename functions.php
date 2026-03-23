<?php

/**
 * Theme Support
 */
add_theme_support('post-thumbnails');

/**
 * Script and Styles
 */

// Funktion som läser in publika skript, alltså skript som används bara i frontend. 
function uv_public_scripts()
{
    // Det sista värdet i funktionen som vi satt till true, är att scriptet läses in i footern, alltså när hela sidan är laddad. Motsvarar "defer" som vi använt tidigare. 
    wp_enqueue_script('header-scroll', get_template_directory_uri() . '/src/js/headerScroll.js', array(), '1.0', true);
    wp_enqueue_script('responsive-menu', get_template_directory_uri() . '/src/js/responsiveMenu.js', array(), '1.0', true);
    wp_enqueue_script('video-control', get_template_directory_uri() . '/src/js/videoControl.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'uv_public_scripts');


function uv_script_and_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    add_editor_style('style.css');
}

add_action('enqueue_block_assets', 'uv_script_and_styles');





// EGEN INLÄSNING - FUNKAR

// function uv_script()
// {
//     // Register the script like this for a theme:
//     // wp_register_script('main-script', get_template_directory_uri() . '/main.js');
//     // wp_enqueue_script('main-script');
//     wp_enqueue_script('tyc_scripts', get_theme_file_uri('/main.js'), array(), false, true);
// }

// add_action('wp_enqueue_scripts', 'uv_script');
