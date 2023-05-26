<?php

echo '<pre>';

echo '____10 užduotis___<br><br>';

// 10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// a. “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// b. “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.

$nailLength = 0; // vinies ilgis 8.5cm = 85mm
$counter = 0;

for ($i = 1; $i <= 5; $i++) {
    
    do {
        $kick = rand(5, 20);
        $nailLength += $kick;
        $counter++;
    } while ($nailLength < 85);
}
echo "5 vinis įkalti reikės $counter smūgių.";

echo '<br><br>';


$nailLength2 = 0; // vinies ilgis 8.5cm = 85mm
$counter2 = 0;

for ($x = 1; $x <= 5; $x++) {

    do {
        $success = rand(0, 1); // 50% pataikymo tikimybe
        if ($success === 1) {
            $kick2 = rand(20, 30);
            $nailLength2 += $kick2;
            $counter2++;
        } else {
            $counter2++;
        } 
    } while ($nailLength2 < 85);
}
echo "5 vinis įkalti, kai 50% pataikymo tikimybė, reikės $counter2 smūgių.";