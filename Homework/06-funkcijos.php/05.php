<?php

echo '<pre>';

echo '____5 užduotis___<br><br>';

// 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

$array = [];

for ($i = 0; $i < 100; $i++) {
    $number = rand(33, 77);
    $array[] = $number;
}

function countDivisors($number) {
    if (is_int($number)) {
        $count = 0;
        if ($number < 0) {
          $number = $number * -1;
        }
          for($i = 2; $i < $number; $i++) {
            if($number % $i == 0) {
              $count++;
            }
          }
        return $count;
    } else {
        echo 'Number is not an integer';
    }
}

usort($array, fn($a, $b) => countDivisors($b) <=> countDivisors($a));

echo "Masyvas išrūšiuotas pagal daliklių be liekanos kiekį mažėjimo tvarka: \n";
foreach ($array as $member) {
    echo $member . "->" . countDivisors($member) . '<br>';
}

// Kitas būdas

foreach(range(1, 100) as $_) {
    $digit = [
        'value' => rand(33, 77)
    ];
    $array2[] = $digit;
}

foreach ($array2 as &$digit) {
    $digit['divisor'] = rand(1, 11);
}

usort($array2, fn($a, $b) => $b['divisor'] <=> $a['divisor']);

print_r($array2);
