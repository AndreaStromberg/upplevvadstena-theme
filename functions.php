<?php

/**
 * Script and Styles
 */

function uv_script_and_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

add_action('enqueue_block_assets', 'uv_script_and_styles');
