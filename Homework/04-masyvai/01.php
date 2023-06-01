<?php

echo '<pre>';

echo '____1 užduotis___<br><br>';

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

for ($i = 0; $i <= 30; $i++) {
    $randomNumber = rand(5, 25);
    $array[] = $randomNumber;
}

print_r($array);