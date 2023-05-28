<?php

echo '<pre>';

echo '____9 užduotis___<br><br>';

// 9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

for ($i = 0; $i < 10; $i++) {
    $subArraySize = rand(0, 5);
    $subArray = [];

    if ($subArraySize !== 0) {
        for ($s = 0; $s < $subArraySize; $s++) { 
            $number = rand(1, 10);
            $subArray[] = $number;
        }
        $array[] = $subArray;
    } else {
        $array[] = rand(0, 10);
    }
}
print_r($array);

echo '<br>';
// Paskaičiuokite masyvo visų reikšmių sumą

$sum = 0;

foreach ($array as $value) {
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
echo 'Masyvo visų reikšmių suma: ';
print_r($sum);

echo '<br><br>';
// Išrūšiuokite pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi, eitų pradžioje

sort($array);

foreach ($array as &$subArray) {
    if (is_array($subArray)) {
        $sum = array_sum($subArray);
        sort($subArray);
        $subArray = ['subArray' => $subArray, 'sum' => $sum];
    }
}
unset($subArray);

usort($array, function($a, $b) {
    if (is_array($a) && is_array($b)) {
        if (array_key_exists('sum', $a) && array_key_exists('sum', $b)) {
            return $a['sum'] - $b['sum'];
        }
    }
    if (is_int($a) && is_int($b)) {
        return $a - $b;
    }
});

echo "Parent array and subarrays sorted ascendingly: \n";
foreach ($array as $key => $value) {
    if (is_array($value)) {
        echo "[$key] -> [" . implode(', ', $value['subArray']) . "], sum: " . $value['sum'] . " \n";
    } else {
        echo "[$key] -> $value \n";
    }
}