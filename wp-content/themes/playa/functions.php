<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

// CMB2 fields

/**
 * CMB2 Fields
 * - Hero 
 * - Reviews
 * - Menu
 * - Paralax
 * - Events
 * - Monthly BBQ
 * - Contact
 */


//  function wpdocs_theme_name_scripts() {
// 	// wp_enqueue_style( 'style-name', get_stylesheet_uri() );
// 	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
//     wp_register_style('main-styles', get_template_directory_uri() . '/style.css');
// }
// add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function my_theme_enqueue_styles() {

    $parent_style = 'playa';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_script( $parent_style, get_template_directory_uri() . '/script.js', array(), '', true  );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

