<?php

echo '<pre>';

echo '____5 užduotis___<br><br>';

// 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

$letters = ['A', 'B', 'C', 'D'];

// Array 1
for ($i = 0; $i < 200; $i++) {
    $array1[] = $letters[rand(0, 3)];
}

// Array 2
for ($i = 0; $i < 200; $i++) {
    $array2[] = $letters[rand(0, 3)];
}

// Array 3
for ($i = 0; $i < 200; $i++) {
    $array3[] = $letters[rand(0, 3)];
}

// Naujas jungtinis masyvas, sudėjus 3-jų masyvų atitinkamas reikšmes
for ($i = 0; $i < 200; $i++) { // prasukam ciklą
    $newValues = $array1[$i] . $array2[$i] . $array3[$i]; // imant kiekvieno masyvo reikšmės indeksą, sukuriamos naujo masyvo reikšmės (pvz., DBA)
    $newArray[] = $newValues; // 
}
echo "Naujas jungtinis masyvas, sudėjus 3-jų masyvų reikšmes: \n";
print_r($newArray);

// Skaičiuojame, kiek unikalių naujo masyvo reikšmių kombinacijų
$uniqueCombos = count(array_unique($newArray)); // array_unique() function removes duplicate values from an array. count() function returns the number of elements in an array.

// Skaičiuojame, kiek unikalių (po vieną, nesikartojančių) naujo masyvo reikšmių
$uniqueValues = count(array_unique(array_count_values($newArray))); // array_count_values — Counts all the values of an array and returns an associative array of values ​​from array as keys and their count as value.

echo "Unikalios (po vieną, nesikartojančios) reikšmės: " . $uniqueValues . "\n";
echo "Unikalios kombinacijos: " . $uniqueCombos . "\n";

