<?php




$errors = [];
$name = '';
$email = '';
$pass = '';

if ($_POST['name'] && $_POST['email'] && $_POST['password']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
} else {
    echo 'Post is not worked';
}
