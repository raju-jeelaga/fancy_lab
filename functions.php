<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress Theme
 */


function wordpress_theme_scripts(){
	wp_enqueue_style('wordpress_theme_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wordpress_theme_scripts');

