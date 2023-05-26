<?php

echo '<pre>';

echo '____1 užduotis___<br><br>';

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$array = [];

for ($i = 0; $i <= 30; $i++) {
    $randomNumber = rand(5, 25);
    $array[] = $randomNumber;
}

foreach ($array as $key => $value) {
    echo "[$key] => $value\n";
}