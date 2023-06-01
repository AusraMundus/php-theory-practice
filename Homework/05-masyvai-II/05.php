<?php

echo '<pre>';

echo '____5 užduotis___<br><br>';

// 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

for ($i = 0; $i < 30; $i++) { // sugeneruojame 30 submasyvų
    $user_id = rand(1, 1000000); // apsirašom submasyvo reikšmes - kintamuosius
    $place_in_row = rand(0, 100);

    $subArray = [ // nurodome, kas kiekvieno submasyvo viduje - kintamieji $user_id ir $place_in_row
        'user_id' => $user_id,
        'place_in_row' => $place_in_row
    ];
    
    $array[] = $subArray;
}
echo "Masyvas iš 30 elementų, kurio elementai - masyvai iš 2 elementų [user_id => xxx, place_in_row => xxx]: \n";
print_r($array);