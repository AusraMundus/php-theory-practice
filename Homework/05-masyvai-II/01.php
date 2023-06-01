<?php

echo '<pre>';

echo '____1 užduotis___<br><br>';

// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

for ($i = 0; $i < 10; $i++) { // sugeneruojame masyvą iš 10 elementų (submasyvų)
    $subArray = [];
    
    for ($s = 0; $s < 5; $s++) { // kiekviename submasyve sugeneruojame po 5 elementus iš random skaičių
        $number = rand(5, 25);
        $subArray[] = $number;
    }

    $array[] = $subArray;
}

echo "Masyvas iš 10 elementų, kurio elementai - masyvai iš 5 elementų: \n";
print_r($array);

// Long way :)
/*
// Elementas1 - Array1
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array1[] = $number;
}

// Elementas2 - Array2
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array2[] = $number;
}

// Elementas3 - Array3
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array3[] = $number;
}

// Elementas4 - Array4
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array4[] = $number;
}

// Elementas5 - Array5
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array5[] = $number;
}

// Elementas6 - Array6
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array6[] = $number;
}

// Elementas7 - Array7
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array7[] = $number;
}

// Elementas8 - Array8
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array8[] = $number;
}

// Elementas9 - Array9
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array9[] = $number;
}

// Elementas10 - Array10
for ($i = 0; $i < 5; $i++) {
    $number = rand(5, 25);
    $array10[] = $number;
}

$newArray = [$array1, $array2, $array3, $array4, $array5, $array6, $array7, $array8, $array9, $array10];
echo "Masyvas iš 10 elementų, kurio elementai - masyvai iš 5 elementų: \n\n";
print_r($newArray);
*/