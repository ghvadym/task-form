<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'flexi140');
define('DB_NAME', 'stage');


$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$mysqli) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


////////////////////////////////////////////////////////////////


$table_name = 'users';

$create_table = "CREATE TABLE IF NOT EXISTS ".$table_name." (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email    VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

$result = $mysqli->query($create_table) or die("Bad create $create_table");


//////////////////////////////////////////////////////////////////



function user($mysqli) {
    $errors = [];
    $table_name = 'users';

    if (!empty($_POST)) {

        $values = [
            'name'  => $_POST['name'],
            'email' => $_POST['email'],
            'password'  => $_POST['password'],
        ];

        foreach ( $values as $key => $val ) {
            if ( empty( trim( $val ) ) ) {
                array_push($errors, htmlspecialchars("Please enter a <b>$key</b>"));
            }

            if ( trim( $val ) < 5 ) {
                array_push($errors, "The $key will be more than 5 elements");
            }
        }


        if ( empty($errors) ) {

            $sql = "INSERT INTO {$table_name} (username, email, password) 
                VALUES (
                    '".$values['name']."', 
                    '".$values['email']."', 
                    '".$values['password']."'
                )";

            $mysqli->query($sql);

        }
    }
    return $_POST['name'];
}



