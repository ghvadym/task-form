<?php

function form_login()
{

    $errors = [];

    if ( !empty( $_POST ) ) {

        $values = [
            'user_login' => $_POST['user_login'],
            'user_password'  => $_POST['user_password'],
            'remember'   => $_POST['remember'],
        ];

        foreach ( $values as $key => $val ) {
            if ( empty( trim( $val ) ) ) {
                array_push($errors, "Please enter a $key");
            }
        }

        if ( get_user_by('login', $values['username'] ) ) {
            array_push($errors, "Username '".$values['username']."' is wrong");
        }

        if ( get_user_by('pass', $values['user_pass'] ) ) {
            array_push($errors, "Password is incorrect. please try again");
        }

        $user = wp_signon( $values, false );

        if ( $user && !is_user_logged_in() ) {
            echo "<script type='text/javascript'>window.location.href='". home_url() ."' + '/wp-admin'</script>";
            exit();
        }

        $user = wp_signon( $values );

        if ( is_wp_error( $user ) ) {
            array_push($errors, $user->get_error_message() );
        } ?>




        <?php if ($errors) : ?>
            <ul class="errors">
                <?php foreach ($errors as $error) { ?>
                    <li class="error__item">
                        <?php echo $error; ?>
                    </li>
                <?php } ?>
            </ul>
        <?php endif; ?>

    <?php }

    die();

}




add_action('wp_ajax_form_login', 'form_login');
add_action('wp_ajax_nopriv_form_login', 'form_login');