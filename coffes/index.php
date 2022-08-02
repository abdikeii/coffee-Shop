<?php

include 'conn.php';

error_reporting(0);

session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('./app/layout/css.php'); ?>
    <title>Coffes</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Coffe's
        </div>
        <form class="p-3 mt-3" action="" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" name="password">
            </div>
            <button class="btn mt-3" name="submit">Login</button>
        </form>
    </div>
</body>

</html>