<?php

echo '<pre>';

echo '____3 užduotis___<br><br>';

// 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$letters = ['A', 'B', 'C', 'D']; // masyvas su raidėmis

for ($i = 0; $i < 200; $i++) { // ciklas prasukamas 200 kartų, vis pridedant po reiksme
    $array[] = $letters[rand(0, 3)]; // generuojamas naujas masyvas su random raidemis, imant raides random indeksa
}

$countA = array_count_values($array)['A']; // array_count_values() — funkcija, kuri skaiciuoja visas masyvo reiksmes.
$countB = array_count_values($array)['B'];
$countC = array_count_values($array)['C'];
$countD = array_count_values($array)['D'];

echo "Raidžių A yra: " . $countA . "\n";
echo "Raidžių B yra: " . $countB . "\n";
echo "Raidžių C yra: " . $countC . "\n";
echo "Raidžių D yra: " . $countD . "\n";