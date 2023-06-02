<?php

if (isset($_GET['redirect'])) {
    header('Location: http://localhost/php-theory-practice/Homework/07-web-mechanika/05-blue.php');
    die();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Page</title>
</head>

<body style="background:red;">

    <a style="color:blue; font-size:40px; padding: 40px;" href="?redirect">SPAUSK MANE</a>

</body>

</html>