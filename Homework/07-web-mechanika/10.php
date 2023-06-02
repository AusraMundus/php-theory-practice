<?php
// 10. Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.

$checkboxNo = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$checkboxNoLength = rand(3, 10);

$color = $_GET['color'] ?? 'black';
$formShow = $_GET['formShow'] ?? 1;
$counter = $_GET['counter'] ?? 0;
$rand = $_GET['rand'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $counters = $_POST['masyvas'] ?? [];
    $counter = count($counters);
    
    $rand = $_POST['rand'] ?? 0;

    header('Location: http://localhost/php-theory-practice/Homework/07-web-mechanika/10.php?counter=' . $counter . '&color=white&formShow=0&rand=' . $rand, true, 303);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 uždavinys</title>
</head>

<body style="background-color: <?= $color ?>">

    <?php if (!$formShow) : ?>
        <h1> <?= $counter ?> </h1>
        <h2> <?= $rand ?> </h2>
    <?php endif ?>

    <?php if ($formShow) : ?>
        <form action="http://localhost/php-theory-practice/Homework/07-web-mechanika/10.php" method="post">
            <?php for ($i = 0; $i < $checkboxNoLength; $i++) {
                echo '<label style="color:pink;" for="' . $i . '">' . $checkboxNo[$i] . '</label>';
                echo '<input type="checkbox" id="' . $i . '" name="masyvas[]" />';
            }
            echo '<input type="hidden" name="rand" value="' . $checkboxNoLength . '"/>'
            ?>
            <button type="submit">Suskaičiuok</button>
        </form>
    <?php endif ?>
</body>

</html>