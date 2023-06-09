<!-- Duomenu paemimas is DB -->

<!-- https://www.w3schools.com/MySQL/mysql_sql.asp -->

<!-- Duombaze -->
<?php

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

// Nurodome, kokius duomenis imti is DB
    // SELECT column1, column2, ...
    // FROM table_name;

$sql = "
    SELECT id, title, height, type
    FROM trees
    WHERE type <> 3
    ORDER BY type, height DESC
";
// Rusiavimas - WHERE
// nelygu zenklas <> arba !=
// kai norim kelis paimti, pvz. type = 1 || type = 2
// type = 1 && height > 1
// Rikiavimas - ORDER BY 
// galime nurodyti kaip rikiuoti

$stmt = $pdo->query($sql); // DB steitmentas
$trees = $stmt->fetchAll(); // Visko istraukimas

$types = [
    1 => 'Lapuotis',
    2 => 'Spygliuotis',
    3 => 'Palmė',
];

// ATVAIZDAVIMAS NARSYKLEJE
?>
<table>
    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Aukstis</th>
        <th>Tipas</th>
    </tr>
    <?php foreach ($trees as $tree) : ?>
        <tr>
            <td><?= $tree['id'] ?></td>
            <td><?= $tree['title'] ?></td>
            <td><?= $tree['height'] ?></td>
            <td><?= $types[$tree['type']] ?></td>
        </tr>
    <?php endforeach ?>
</table>