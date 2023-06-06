<?php

session_start();

if (!isset($_SESSION['name'])) {
    header('Location: http://localhost/php-theory-practice/019/login/login.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
</head>

<body>
    <h1 style="color:skyblue;">Member Page</h1>
    <?php require __DIR__ . '/menu.php' ?>
</body>

</html>