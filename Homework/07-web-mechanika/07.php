<?php
// 7. Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.


$color = $_GET['color'] ?? 'green';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
    header('Location: http://localhost/php-theory-practice/Homework/07-web-mechanika/07.php?color=violet', true, 303);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 uzdavinys</title>
</head>

<body style="background-color: <?= $color ?>;">

    <form action="http://localhost/php-theory-practice/Homework/07-web-mechanika/07.php" method="get">
        <button type="submit">GET</button>
    </form>


    <form action="http://localhost/php-theory-practice/Homework/07-web-mechanika/07.php" method="post">
        <button type="submit">POST</button>
    </form>

</body>

</html>