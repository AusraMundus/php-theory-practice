<?php

echo '<pre>';

echo '____8 užduotis___<br><br>';

// 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.

function makeArray($maxCount) {
    static $counter = 0;
    $subArray = [];
    for($i = 1; $i <= 9; $i++){
        $subArray[]= rand(0, 10);
    }
    $counter++;
    if ($counter < $maxCount){
        $subArray[] = makeArray($maxCount);
    } else {
        $subArray[] = 0;
    }
return $subArray;
}

$array[] = makeArray(rand(10,30));

function countNumbers($array) {
    static $numbersCount = 0;
    foreach ($array as $item) {
        if (!is_array($item)) {
            $numbersCount++;
        } else {
            countNumbers($item);
        }
    }
    return $numbersCount;
}

echo 'Elementų, kurie nėra masyvai, suma: ';
echo countNumbers($array) . '<br>';
echo "<br>";
print_r($array);