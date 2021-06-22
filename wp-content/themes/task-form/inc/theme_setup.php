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

add_action( 'after_setup_theme', function() {

    register_nav_menus( [
        'main_header' => 'Main Header',
    ] );

} );
