<?php
if (isset($_GET['redirect'])) {
    header('Location: http://localhost/php-theory-practice/018/u5-webmechanika/red.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue page</title>

    <style>
        a {
            color: darkblue;
            font-size: 3em;
            padding: 40px;
        }
    </style>

</head>

<body style="background: skyblue;">

    <a href="?redirect">LINKAS</a>

</body>

</html>