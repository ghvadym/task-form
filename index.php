<?php

//error_reporting(-1);
//ini_set('display_errors', 'On');

use dbConnect\dbConnect;

require_once "functions.php";
require_once "classes/dbConnect.php";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
</head>
<body>

    <section class="form">
        <div class="container">
            <div class="form__wrap" style="background-image: url(<?php echo '/assets/img/background.png'; ?>)">
                <div class="form__border">
                    <div class="border__image">
                        <img src="<?php echo '/assets/img/wood_border.png' ?>" alt="border">
                    </div>
                    <form action="ajax.php" method="post" class="form__item">
                        <h2 class="form__title">Pixels Daily</h2>
                        <div class="form__body">
                            <div class="input-row">
                                <label for="name">Username</label>
                                <input type="text" name="name">
                            </div>
                            <div class="input-row">
                                <label for="email">Email</label>
                                <input type="email" name="email">
                            </div>
                            <div class="input-row">
                                <label for="password">Password</label>
                                <input type="password" name="password">
                            </div>
                            <button type="submit" class="btn-submit"> > </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>