<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_parent', 10 );
function theme_enqueue_styles_parent() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 100 );
function theme_enqueue_styles() {
    
    wp_enqueue_style('planty', get_stylesheet_directory_uri(). '/style.css'); 
}
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );


function admin_tab() {
    if ( !is_admin() ) {
        
    }
    else {
        
    }
}