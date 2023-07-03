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

// JOIN budai - duombaze apie juos nezino.
// Duombazeje reikia sujungti papildomai norimas lenteles. Nesujungs, jei yra vaikas be tevo, pvz. tel. nr. (vaikas) be kliento (tevas). Klientas (tevas) gali buti be tel. nr. (vaikas). Jungiant pasirenkame vaikineje lenteleje (phone), ka jungsime: > Stucture > Relation view > Column: client_id > Database: studies > Table: clients > Column: id
// Rysi galima pasiziureti > Duombaze > Designer > Rodo rysi - clients id su phone client_id

// INNER JOIN
$sql = "
    SELECT c.id, name, number
    FROM clients AS c
    INNER JOIN phone AS p
    ON c.id = p.client_id
";
// pervadiname lenteles, sutrumpiname
// ON - taisykle, kaip apjungti DB lenteles
// SELECT * - su zvaigzdute reiskia ALL
// SELECT - nurodom, kas is kur paimta.

$stmt = $pdo->query($sql); // DB steitmentas
$clients = $stmt->fetchAll(); // Visko istraukimas

?>

<h1>INNER JOIN</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($clients as $client) : ?>
        <tr>
            <td><?= $client['id'] ?></td>
            <td><?= $client['name'] ?></td>
            <td><?= $client['number'] ?></td>
        </tr>
    <?php endforeach ?>
</table>


<?php

// LEFT JOIN
$sql = "
    SELECT c.id, name, number
    FROM clients AS c
    LEFT JOIN phone AS p
    ON c.id = p.client_id
";

$stmt = $pdo->query($sql); // DB steitmentas
$clients = $stmt->fetchAll(); // Visko istraukimas

?>

<h1>LEFT JOIN</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($clients as $client) : ?>
        <tr>
            <td><?= $client['id'] ?></td>
            <td><?= $client['name'] ?></td>
            <td><?= $client['number'] ?></td>
        </tr>
    <?php endforeach ?>
</table>

<?php

// RIGHT JOIN
$sql = "
    SELECT c.id, name, number
    FROM clients AS c
    RIGHT JOIN phone AS p
    ON c.id = p.client_id
";

$stmt = $pdo->query($sql); // DB steitmentas
$clients = $stmt->fetchAll(); // Visko istraukimas

?>

<h1>RIGHT JOIN</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($clients as $client) : ?>
        <tr>
            <td><?= $client['id'] ?></td>
            <td><?= $client['name'] ?></td>
            <td><?= $client['number'] ?></td>
        </tr>
    <?php endforeach ?>
</table>
