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

$sum = [0];
foreach ($array as $subArray){
    if (gettype($subArray) === "integer") {
        $sum[0]  += $subArray;
    } else {
        $sum[] = array_sum($subArray);
    }
}
echo "Masyvo visų reikšmių sumos: <br>";
echo implode(" ", $sum);

echo '<br><br>';

echo "Masyvo visų reikšmių sumų rūšiavimas didėjančia tvarka: <br>";
sort($sum);
echo implode(" ", $sum);