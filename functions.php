<?php


// /**
//  * Custom navigation setup
//  */
function scapes_custom_menu() {
    register_nav_menu('primary',__( 'My Custom Menu' ));
}
add_action( 'init', 'scapes_custom_menu' );

require_once('php/class-wp-bootstrap-navwalker.php');



/**
 * Register Styles and scripts
 */
//CSS
wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), date("h:i:s"));
wp_enqueue_style('navigation_css', get_stylesheet_directory_uri().'/css/navigation.css', array(), date("h:i:s"));
wp_enqueue_style('homepage_css', get_stylesheet_directory_uri().'/css/homepage.css', array(), date("h:i:s"));
wp_enqueue_style('play_font_css', 'https://fonts.googleapis.com/css?family=Play&display=swap', array(), date("h:i:s")); //Play font (matches Eras)

//JS
//Note that jQuery is automatically pulled in by WP
wp_enqueue_script('bootstrap_jquery', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array('jquery'), date("h:i:s"), true);




//Don't show in admin panel
if (!is_admin()) {
    include('php/navigation.php');
}








