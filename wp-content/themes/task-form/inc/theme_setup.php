<?php

add_action(  'wp_enqueue_scripts', 'stage_scripts' );
function stage_scripts() {
    wp_enqueue_style( 'stage-styles' , get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'app-styles' , get_template_directory_uri() . '/assets/css/app.css' );

    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/app.js', ['jquery'], false, true );
    wp_localize_script( 'main-script', 'my-ajax', ['ajaxurl' => admin_url('admin-ajax.php')] );
}

add_action( 'after_setup_theme', function() {

    register_nav_menus([
        'main_header' => 'Main Header',
    ]);

} );
