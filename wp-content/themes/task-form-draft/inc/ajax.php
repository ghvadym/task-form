<?php




function form_register()
{
    echo $_POST['name'];
}

add_action('wp_ajax_form_register', 'form_register');
add_action('wp_ajax_nopriv_form_register', 'form_register');