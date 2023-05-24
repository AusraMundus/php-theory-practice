<?php

echo "<pre>";

// 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

echo '____2 užduotis___<br><br>';

// The strtoupper() function converts a string to uppercase
// The strtolower() function converts a string to lowercase.

$name_2 = 'Will';
$last_name_2 = 'Smith';
echo strtoupper($name_2) . ' ' . strtolower($last_name_2); 