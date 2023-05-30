<?php

echo '<pre>';

echo '____7 užduotis___<br><br>';

// 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

function mainArray() {
    $arrayLength = rand(10, 20);
    $array = [];
    for ($i = 0; $i < $arrayLength - 1; $i++) {
        $subArray = rand(0, 10);
        $array[] = $subArray;
    }
    return $array;
}

function lastSubArray() {
    $subArray = mainArray();
    $subArray[] = 0;
    return $subArray;
}

$rounds = rand(10, 30);
for ($i = 0; $i < $rounds; $i++) {
    if ($i == $rounds - 1) {
        $array = lastSubArray();
    } else {
        $array = mainArray();
    }
    echo "Masyvas $i: ";
    print_r($array);
    echo '<br>';
}

