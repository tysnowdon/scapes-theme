<?php


// /**
//  * Custom navigation setup
//  */
function scapes_custom_menu() {
    // register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    register_nav_menu('primary',__( 'My Custom Menu' ));
}
add_action( 'init', 'scapes_custom_menu' );

require_once('php/class-wp-bootstrap-navwalker.php');


// // Replacement nav
// wp_nav_menu( array( 
//     'theme_location' => 'my-custom-menu', 
//     'container_class' => 'custom-menu-class',
//     'container_id' => 'custom-menu') ); 

/**
 * Register Styles and scripts
 */
//CSS
wp_enqueue_style('prefix_bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), date("h:i:s"));

//JS
//Note that jQuery is automatically pulled in by WP
wp_enqueue_script('prefix_bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array('jquery'), date("h:i:s"), true);








include('php/navigation.php');







