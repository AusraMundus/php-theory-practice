<?php
// 8. Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį. 


$error = $_GET['error'] ?? 0;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Page</title>
</head>

<body style="background-color: pink;">

    <form action="http://localhost/php-theory-practice/Homework/07-web-mechanika/08-rose.php" method="post">
        <button type="submit">GO TO ROSE</button>
    </form>

    <?php if ($error == 1) : ?>
        <h1>Ką čia veiki?</h1>
    <?php endif ?>

</body>

</html>