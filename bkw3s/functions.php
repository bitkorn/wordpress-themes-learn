<?php
/**
 * User: Torsten Brieskorn
 * Date: 13.11.17
 */

/**
 * Register stylesheets
 * Also look: https://wordpress.stackexchange.com/a/166186
 */
function bkw3s_theme_stylesheets()
{
    wp_enqueue_style( 'bkw3sw3',  get_template_directory_uri() .'/assets/css/w3.css', [], null, 'all' );

    /*
     * another way
     */
//    wp_register_style( 'bkw3sw3', get_stylesheet_uri() .'/assets/css/w3.css', [], null, 'all' );
//    wp_enqueue_style( 'bkw3sw3' );
}

add_action( 'wp_enqueue_scripts', 'bkw3s_theme_stylesheets' );