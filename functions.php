<?php

/**
 *  Theme Function
 * 
 * @package Tech Theme
 */


if(!defined('TECH_DIR_PATH')){
    define('TECH_DIR_PATH', untrailingslashit(get_template_directory()));
}


require_once TECH_DIR_PATH.'./inc/helpers/autoloader.php';

function aquila_get_theme_instance() {
      \TECH_THEME\Inc\TECH_THEME::get_instance();
}
// echo '<pre>';
// print_r(\TECH_THEME\Inc\TECH_THEME::get_instance());
// wp_die();
aquila_get_theme_instance();



function techtheme_enqueue_scripts()
{
    //register styles
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false);


    //register scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true);
    
    //enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    //enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'techtheme_enqueue_scripts');
