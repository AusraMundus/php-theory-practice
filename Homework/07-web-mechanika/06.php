<?php
// 6. Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.


$color = $_GET['color'] ?? 'green';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 uzdavinys</title>
</head>

<body style="background-color: <?= $color ?>;">

    <form action="http://localhost/php-theory-practice/Homework/07-web-mechanika/06.php" method="get">
        <button type="submit">GET</button>
    </form>


    <form action="http://localhost/php-theory-practice/Homework/07-web-mechanika/06.php" method="post">
        <button type="submit">POST</button>
    </form>

</body>

</html>