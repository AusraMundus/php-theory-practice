<?php

echo '<pre>';

echo '____4 užduotis___<br><br>';

// 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

$array = [];

for ($i = 0; $i < 10; $i++) {
    $subArraySize = rand(2, 20);
    $subArray = [];
    
    for ($s = 0; $s < $subArraySize; $s++) {
        $randLetters = chr(rand(65, 90)); // generate a random uppercase letter
        $subArray[] = $randLetters;
    }
    $array[] = $subArray;
}
echo "Masyvas su atsitiktiniu elementų kiekiu. kurių reikšmės atsitiktinai parinktos raidės iš intervalo A-Z: \n";
print_r($array);

echo '<br>';
// Išrūšiuokite pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi, eitų pradžioje

foreach ($array as $subArray) { // pereiname per visus submasyvus
    $subArrayCount[] = count($subArray); // sukuriame naują masyvą, kuriame sudedame submasyvų ilgius, apskaičiuotus su count()
}

asort($subArrayCount); // asort() – Rūšiuoti masyvą didėjančia tvarka ir palaikyti indekso susiejimą

echo "Nuo trumpiausio iki ilgiausio elemento masyve: \n";
foreach ($subArrayCount as $key => $value) {
    echo "[$key] = $value \n";
}