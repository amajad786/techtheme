<?php

/**
 *  Theme Function
 * 
 * @package Tech Theme
 */
if ( ! defined( 'TECHTHEME_DIR_PATH' ) ) {
	define( 'TECHTHEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'TECHTHEME_DIR_PATH' ) ) {
	define( 'TECHTHEME_DIR_PATH', untrailingslashit( get_template_directory_uri() ) );
}

require_once TECHTHEME_DIR_PATH . '/inc/helpers/autoloader.php';
require_once TECHTHEME_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance() {
	\TECH_THEME\Inc\TECH_THEME::get_instance();
}
aquila_get_theme_instance();
