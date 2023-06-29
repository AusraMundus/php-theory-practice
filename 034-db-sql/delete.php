<!-- Duomenu trynimas is DB -->

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

    $id = $_POST['id'] ?? 0;

    // DELETE FROM table_name WHERE condition;

    $sql =
        "
        DELETE FROM trees 
        WHERE id = ?
        ";

    // $pdo->query($sql); // DB steitmentas

    // Apsauga nuo netinkamu uzklausu, kad nebutu viskas istrinta is DB
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header('Location: http://localhost/php-theory-practice/034-db-sql/');
    die;
}

?>

<form action="" method="post">
    <input type="text" name="id" placeholder="ID">
    <button type="submit">Trinti</button>
</form>