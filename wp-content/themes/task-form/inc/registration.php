<?php


function send_response($data, $status_code = 200)
{
    status_header($status_code);

    if (is_object($data) || is_array($data)) {
        header('Content-Type: application/json; charset=' . get_option('blog_charset'));
        $data = json_encode($data);
    }

    echo $data;

    die();
}


function form_register()
{
    $errors = [];

    if ( !empty( $_POST ) ) {

        $values = [
            'user_login'  => $_POST['name'],
            'user_email' => $_POST['email'],
            'user_pass'  => $_POST['pass'],
        ];

        foreach ( $values as $key => $val ) {
            if ( empty( trim( $val ) ) ) {
                array_push($errors, "Please enter a $key");
            }

            if ( !empty( trim( $val )) && trim( strlen( $val ) ) < 5 ) {
                array_push($errors, "The $key will be more than 5 elements");
            }
        }

        if ( get_user_by('login', $values['user_login'] ) ) {
            array_push($errors, "The username '".$values['user_login']."' is exist");
        }

        if ( get_user_by('email', $values['user_email'] ) ) {
            array_push($errors, "The email '".$values['user_email']."' is exist");
        }


        if ( empty($errors) ) {
            if ( wp_create_user($values['user_login'], $values['user_pass'], $values['user_email'] ) ) {
                $message = __('You are have been register', 'stage');
                $status = 200;

                echo "<script type='text/javascript'>window.location.href='". home_url() ."' + '/wp-admin'</script>";
                exit();
            } else {
                $message = __('Something wrong ', 'stage');
                $status = 202;
            }
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



    send_response($message, $status);

}

add_action('wp_ajax_form_register', 'form_register');
add_action('wp_ajax_nopriv_form_register', 'form_register');