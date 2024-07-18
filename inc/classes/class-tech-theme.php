<?php
/**
 * Bootstraps the Theme.
 *
 * @package Tech Theme
 */

namespace TECH_THEME\Inc;

use TECH_THEME\Inc\Traits\Singleton;

class TECH_THEME {
	use Singleton;

	protected function __construct() {

		//Load 

		Assets::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions.
		 */
		add_action('after_setup_theme', [$this, 'setup_theme']); 
	}

	public function setup_theme(){
		add_theme_support( 'title-tag' );

		add_theme_support('custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array('site-title', 'site-description'),
		));

		add_theme_support('custom-background', array(
			'default-color' => '#fff',
			'default-image' => '',
			'default-repeat' => 'no-repeat',
		));

		add_theme_support('post-thumbnails');
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support('automatic-feed-links');
		add_theme_support('html5',[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		]);

		add_editor_style();

		add_theme_support('align-wide');

		global $content_width;
		if(!isset($content_width)){
			$content_width = 1240;
		}
	}
	
}