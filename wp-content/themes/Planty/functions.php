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


/*function admin_tab() {
    if ( !is_admin() ) {
        add_menu_page( 'admin.php' );
    }
    else { 
        
    }
}

add_action('menu', 'admin_tab');



function add_menu_page( $page_title, $menu_title, $capability, $menu_slug,) {
	global $menu, $admin_page_hooks, $_registered_pages, $_parent_pages;
    $menu_slug = admintrator_page ( $menu_slug );

}


function adminstrator_page(){
	add_menu_page( 
		__( 'admin', 'textdomain' ),
		
	); 
}
add_action( 'menu_navigation', 'wadminstrator_page' );*/
