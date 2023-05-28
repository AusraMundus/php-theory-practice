<?php

echo '<pre>';

echo '____7 užduotis___<br><br>';

// 7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

/*
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
*/

// Naujas masyvas su papildomais key - name ir surname

for ($i = 0; $i < 30; $i++) {
    $user_id = rand(1, 1000000);
    $place_in_row = rand(0, 100);

    $latinAlphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $name = substr(str_shuffle($latinAlphabet), 0, rand(5, 15));
    $surname = substr(str_shuffle($latinAlphabet), 0, rand(5, 15));

    $subArray = [
        'user_id' => $user_id,
        'place_in_row' => $place_in_row,
        'name' => $name,
        'surname' => $surname
    ];
    
    $array[] = $subArray;
}
echo "Masyvas iš 30 elementų, kurio elementai - masyvai iš 4 elementų: \n";
print_r($array);