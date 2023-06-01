<?php

echo '<pre>';

echo '____9 užduotis___<br><br>';

// 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

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

$newArray = array_combine($array1, $array2); // array_combine — Creates an array by using one array for keys and another for its values
echo "Naujas masyvas: \n";
print_r($newArray);