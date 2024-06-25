<?php

/**
 *  Theme Function
 * 
 * @package Tech Theme
 */

// echo '<pre>';
// print_r(filemtime(get_template_directory().'/style.css'));
// wp_die();
function techtheme_enqueue_scripts()
{
    //register styles
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap-grid.min.css', [], false);


    //register scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.js', [ 'jquery' ], false, true);
    
    //enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    //enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'techtheme_enqueue_scripts');
