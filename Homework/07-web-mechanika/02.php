<?php

// 2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.

$color = $_GET['color'] ?? '000';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 uždavinys</title>
</head>
<body style="background-color:#<?= $color ?>;">

    <a href="http://localhost/php-theory-practice/Homework/07-web-mechanika/02.php" style="color:white;">Make me black</a>

</body>
</html>