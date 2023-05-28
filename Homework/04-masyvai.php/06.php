<?php

echo '<pre>';

echo '____6 užduotis___<br><br>';

// 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

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
