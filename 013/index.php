<?php

// ARRAY - Masyvas php`e yra primityvas. Atskiras tipas. Masyvas yra struktura ir i stringa nesivercia, todel su echo gausim klaida.

// indeksais negali buti TRUE (pavercia i 1), FALSE (pavercia i 0), NULL

// indeksais gali buti sveikas skaicius arba stringas

echo '<pre>'; // spausdina graziai :D

$m1 = array(); // nerasyti taip, senas budas

$m1 = [77 => 'bebras', 'hello' => 'briedis', '' => 'smauglys'];

$m1['22'] = 'zuikis'; // skaitini stringa konvertuoja i skaiciu, bet geriau nenaudoti

array_push($m1, 'vilkas'); // nenaudotinas

$m1[0] = 'barsukas'; // sekancio nario pridejimas, nerasome jokio numerio, tai prideda automatiskai

print_r($m1); // print_r rodo array

array_unshift($m1, 'krokodilas'); // prideda pirmaji indeksa, pakeicia kitus masyvo indeksus

print_r($m1);

print_r(array_values($m1)); // masyvo sunormalizavimas

// php`e foreach ciklas Nr1

$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as $key => $value) { // $key => $value - kitos reiksmes suteikiamas
    $colors[$key] = 'black';
}

foreach ($colors as &$color) { // & - referensas, priskyrimas pagal nuoroda
    $color = 'black';
}

foreach ($colors as &$value) {}
unset($value); // rysio tarp dvieju kintamuju panaikinimas

foreach ($colors as $value) {
    echo 'Reikšmė: ' . $value . '<br>';
} 

print_r($colors);

for ($x = 1; $x <= 5; $x++) {
    echo 'Numeris: ' . $x . ' <br>'; 
}

echo "\n\n";

// foreach (range(0, 12) as $string) - php funkcija masyvams kurti. Skaiciai ir simboliai galimi

foreach (range(1, 5) as $x) {
    echo 'Numeris: ' . $x . ' <br>';
}

foreach (range('A', 'z') as $x) {
    echo '---> ' . $x . ' <br>';
}

// masyvai masyve
$m2 = [
    [4, 'C', 11, 8],
    7,
    [55, 'A', 2],
    [77, 9, 7, 7, 7],
    20
];

print_r($m2);

$sum = 0;

foreach ($m2 as $value) {

    if (is_array($value)) {
        foreach ($value as $digit) {
            if (is_integer($digit)) {
                $sum += $digit;
            }
        }
    } 
    else {
        if (is_integer($value)) {
            $sum += $value;
        }
    }
}
print_r($sum);

echo "\n\n";

$m3 = [];

foreach (range(1, 5) as $_) {

    $line = [];
    foreach (range(1, rand(2, 5)) as $_) {
        $line[] = rand(0, 9);
    }
    $m3[] = $line;
}
print_r($m3);