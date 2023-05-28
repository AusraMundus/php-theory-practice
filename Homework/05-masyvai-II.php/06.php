<?php

echo '<pre>';

echo '____6 užduotis___<br><br>';

// 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

for ($i = 0; $i < 30; $i++) {
    $user_id = rand(1, 1000000);
    $place_in_row = rand(0, 100);

    $subArray = [
        'user_id' => $user_id,
        'place_in_row' => $place_in_row
    ];
    
    $array[] = $subArray;
}
echo "Masyvas iš 30 elementų, kurio elementai - masyvai iš 2 elementų [user_id => xxx, place_in_row => xxx]: \n";
print_r($array);

// Išrūšiuoti masyvą pagal user_id didėjančia tvarka

foreach ($array as $subArray) { 
    $key1 = $subArray['user_id'];
    if (!isset($subArrayElement1[$key1])) { // isset — Determine if a variable is declared and is different than null
        $subArrayElement1[$key1] = 0;
    }
    $subArrayElement1[$key1]++; 
}

ksort($subArrayElement1); // ksort() function sort the array by its keys in ascending order.

echo "Masyvas išrūšiuotas didėjančia tvarka pagal user_id: \n";
foreach ($subArrayElement1 as $key1 => $value) {
    echo "$key1 \n";
}

echo '<br>';
// Išrūšiuoti masyvą pagal place_in_row mažėjančia tvarka

foreach ($array as $subArray) { 
    $key2 = $subArray['place_in_row'];
    if (!isset($subArrayElement2[$key2])) {
        $subArrayElement2[$key2] = 0;
    }
    $subArrayElement2[$key2]++; 
}

krsort($subArrayElement2); // krsort() function ort an array by key in descending order

echo "Masyvas išrūšiuotas mažėjančia tvarka pagal place_in_row: \n";
foreach ($subArrayElement2 as $key2 => $value) {
    echo "$key2 \n";
}