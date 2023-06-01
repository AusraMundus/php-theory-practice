<?php

// 3. Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.


$color = $_GET['color'] ?? '000';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 uždavinys</title>
</head>
<body style="background-color:#<?= $color ?>;">

    <a href="http://localhost/php-theory-practice/Homework/07-web-mechanika/02.php" style="color:white;">Make me black</a>

</body>
</html>