<?php

/*
** INCLUDE SCRIPTS
*/
function load_scrips(){
    wp_enqueue_script(
        'js',
        get_theme_file_uri('/bundle.js'),
        NULL,
        '1.0',
        true       
    );
    wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css?family=Fira+Sans:300,400,400i,500,600,700&display=swap"');
    wp_enqueue_style('stylesheet',get_stylesheet_uri());    
}
add_action('wp_enqueue_scripts','load_scrips');


/*
** REGISTER NAVIGATION MENU
*/
function register_my_menus(){
    register_nav_menus(
        array(
            'header_primary' => __('Header Menu'),
            'footer_primary' => __('Footer Menu'),            
        )        
    );
}
add_action('init','register_my_menus');


/*
** ADD THEME SUPPORT
*/
function theme_support(){
    add_theme_support('post-thumbnails');    
}
add_action('after_setup_theme','theme_support')

?>