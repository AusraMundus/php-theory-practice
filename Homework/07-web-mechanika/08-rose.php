<?php
echo '<pre>';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: http://localhost/php-theory-practice/Homework/07-web-mechanika/08-pink.php?error=1', true, 303);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose Page</title>
</head>

<body style="background-color: violet;">



</body>

</html>