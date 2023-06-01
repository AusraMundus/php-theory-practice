<?php

echo '<pre>';

echo '____4 užduotis___<br><br>';

// 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

$letters = ['A', 'B', 'C', 'D'];

for ($i = 0; $i < 200; $i++) {
    $array[] = $letters[rand(0, 3)]; 
}

sort($array); // sort() – funkcija, rūšiuoja masyvo reiksmes didėjančia tvarka
foreach ($array as $key => $value) {
    echo "Pagal abėcėlę [" . $key . "] = " . $value . "\n";
}