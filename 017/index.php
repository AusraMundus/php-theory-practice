<?php
// HTML - apačioje, PHP - viršuje

// perdavimas - by query $_GET
// saugumo validacijos back-ende - su ?? (kažkas tokio, true ?? false)
// Method GET - default`inis formos metodas. Ką surašome į formą, forma siunčia info per query, viskas vyksta URL`e.

// perdavimas - per body $_POST
// Method POST - prisijungimams, etc. Kas nereikalauja atvaizdavimo.
// Refreshindami POST, dar kartą post`inam. Reikia redirektintis po POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $what = $_POST['what'] ?? 'nieko';
    $color = $_POST['color'] ?? 'green';

    file_put_contents(__DIR__ .'/memo.ser', serialize([$what, $color]));

    header('Location: http://localhost/php-theory-practice/017/');
    die();


}
else {

    if (!isset($_GET['what'])) {
        
    [$what, $color] = unserialize(file_GET_contents(__DIR__ .'/memo.ser'));

    } else {
        $what = $_GET['what'] ?? 'nieko';
        $color = $_GET['color'] ?? 'green';
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ką aš žinau</title>
</head>
<body>
    <h1 style="color:<?= $color ?>;"><?= $what ?></h1>
    
    <fieldset>
        <legend>GET</legend>
    <form action="http://localhost/php-theory-practice/017/">
        <div>  
            <label>gyvūnas: </label>
            <input type="text" name="what">
        </div>
        <div>  
            <label>spalva: </label>
            <input type="text" name="color">
        </div>   
        <div>
            <button type="submit">Varyk</button>
        </div> 
    </form>
    </fieldset>

    <fieldset>
        <legend>POST</legend>
    <form action="http://localhost/php-theory-practice/017/" method="post">
        <div>  
            <label>gyvūnas: </label>
            <input type="text" name="what">
        </div>
        <div>  
            <label>spalva: </label>
            <input type="text" name="color">
        </div>   
        <div>
            <button type="submit">Varyk</button>
        </div> 
    </form>
    </fieldset>

</body>
</html>

