<!-- Duomenu irasymas i DB -->

<?php

if (!empty($_POST)) {

    $host = 'localhost';
    $db   = 'studies';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);

    $title = $_POST['title'] ?? '';
    $height = $_POST['height'] ?? 0;
    $type = $_POST['type'] ?? 0;

    // INSERT INTO table_name (column1, column2, column3, ...)
    // VALUES (value1, value2, value3, ...);

    // Nurodome, ka irasome i DB
    $sql =
        "
        INSERT INTO trees 
        (title, height, type)
        VALUES (?, ?, ?)
        ";

    //$pdo->query($sql); // Irasymas

    // Apsauga nuo netinkamu uzklausu. VALUES (:t, ?, ?). kintamiesiems galime suteikti vardus, pvz. :t, kad nepasimesti tarp daug kintamuju.  $stmt->execute(['t' => $title, $height, $type]);
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $height, $type]);

    header('Location: http://localhost/php-theory-practice/034-db-sql/');
    die;
}
// kintamuosius stringus dedame i '', pvz., VALUES ('$title', $height, $type) - cia kai nesaugus variantas

?>

<form action="" method="post">
    <input type="text" name="title" placeholder="Pavadinimas">
    <input type="text" name="height" placeholder="Aukstis">
    <select name="type">
        <option value="1">Lapuotis</option>
        <option value="2">Spygliuotis</option>
        <option value="3">Palmė</option>
    </select>
    <button type="submit">Prideti</button>
</form>