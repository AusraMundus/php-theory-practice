<?php

// 1. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.

$color = $_GET['color'] ?? 'black'; // ?? patikrina, ar egzistuoja, ar ne NULL

if ($color == 1) {
    $background = 'red';
} else {
    $background = 'black';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 uždavinys</title>
</head>
<body style="background-color:<?= $background ?>;">

    <a href="http://localhost/php-theory-practice/Homework/07-web-mechanika/01.php" style="color:white;">Click me</a>
    <a href="http://localhost/php-theory-practice/Homework/07-web-mechanika/01.php?color=1" style="color:white;">Make me red</a>

</body>
</html>