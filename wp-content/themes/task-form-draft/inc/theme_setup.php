<?php


add_action(  'wp_enqueue_scripts', 'stage_scripts' );
function stage_scripts() {
    wp_enqueue_style( 'stage-styles' , get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'app-styles' , get_template_directory_uri() . '/assets/css/app.css' );


    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), false, true );
    wp_localize_script( 'main-script', 'MyAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Header',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}



add_action( 'after_setup_theme', function() {

    register_nav_menus( [
        'main_header' => 'Main Header',
    ] );

    add_theme_support(
        'post-thumbnails',
        array(
            'html5',
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support( 'post-thumbnails' );

} );