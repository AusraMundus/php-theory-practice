<?php

echo '<pre>';

echo '____7 užduotis___<br><br>';

// 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.

// Array1
$array1 = array();

while (true) {
    $number1 = rand(100, 999);
    $array1[] = $number1;
    $array1 = array_unique($array1);
    
    if (count($array1) === 100) {
        break;
    }
}
echo "Pirmasis masyvas: \n";
print_r($array1);

// Array1
$array2 = array();

while (true) {
    $number2 = rand(100, 999);
    $array2[] = $number2;
    $array2 = array_unique($array2);
    
    if (count($array2) === 100) {
        break;
    }
}
echo "Antrasis masyvas: \n";
print_r($array2);

// Unikalus masyvas
$arrayUnique = array_diff($array1, $array2); // array_diff — Computes the difference of arrays
echo "Masyvas iš reikšmių, kurios yra pirmame masyve, bet nėra antrame masyve: \n";
print_r($arrayUnique);
