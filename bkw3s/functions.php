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

if(function_exists('register_sidebar')) {

    /**
     * Ändert man die ID einer Sidebar, sind keine Widgets mehr zugeordnet und im Backend sieht man nicht zugeordnete
     * und die Sidebar ist leer.
     */
    function bkw3s_register_sidebars()
    {
        register_sidebar(array(
            'id' => 'sidebar-right', // stellt die Beziehung zu widgets her
            'name' => 'BKw3s-Sidebar-Right',
            'description' => '',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'id' => 'sidebar-left', // stellt die Beziehung zu widgets her
            'name' => 'BKw3s-Sidebar-Left',
            'description' => '',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

    }

    add_action('widgets_init', 'bkw3s_register_sidebars');
}

add_theme_support( 'title-tag' );