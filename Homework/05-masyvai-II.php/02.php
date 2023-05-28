<?php

echo '<pre>';

echo '____2 užduotis___<br><br>';

// 2. Naudodamiesi 1 uždavinio masyvu:
// a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// b. Raskite didžiausio elemento reikšmę;
// c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
// d. Visus antro lygio masyvus “pailginkite” iki 7 elementų
// e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

for ($i = 0; $i < 10; $i++) {
    $subArray = [];
    for ($s = 0; $s < 5; $s++) {
        $number = rand(5, 25);
        $subArray[] = $number;
    }
    $array[] = $subArray;
}
echo "Masyvas iš 10 elementų, kurio elementai - masyvai iš 5 elementų: \n";
print_r($array);

echo '<br>';
// a. Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$count = 0;

foreach ($array as $subArray) {
    foreach ($subArray as $value) {
        if ($value > 10) {
            $count++;
        }
    }
}
echo "Masyve elementų didesnių už 10 yra: " . $count . "\n";

echo '<br>';
// b. Raskite didžiausio elemento reikšmę;

foreach ($array as $subArray) { // patikrina visas submasyvų reikšmes
    $maxValues[] = max($subArray); // su max() funkcija suranda didžiausią kiekvieno submasyvo reikšmę ir visas sudeda į naują masyvą
}
// print_r($maxValues);
$maxValue = max($maxValues); // iš naujojo masyvo išrenka didžiausią reikšmę
echo "Didžiausio elemento reikšmė: " . $maxValue . "\n";

echo '<br>';
// c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;

foreach ($array as $subArray) { // patikrina visas submasyvų reikšmes
    $sum0 += $subArray[0]; // suma visų submasyvų reikšmių su indeksu 0
    $sum1 += $subArray[1];
    $sum2 += $subArray[2];
    $sum3 += $subArray[3];
    $sum4 += $subArray[4];
}
echo "Indeksą 0 turinčių reikšmių suma : $sum0 \n";
echo "Indeksą 1 turinčių reikšmių suma : $sum1 \n";
echo "Indeksą 2 turinčių reikšmių suma : $sum2 \n";
echo "Indeksą 3 turinčių reikšmių suma : $sum3 \n";
echo "Indeksą 4 turinčių reikšmių suma : $sum4 \n";

echo '<br>';
// d. Visus antro lygio masyvus “pailginkite” iki 7 elementų

for ($i = 0; $i < 10; $i++) {
    $newSubArray = [];
    for ($j = 0; $j < 7; $j++) {
        $randomNumber = rand(5, 25);
        $newSubArray[] = $randomNumber;
    }
    $newArray[] = $newSubArray;
}
echo 'Masyvas, kurio elementai sudaryti iš 7 elementų :';
print_r($newArray);

echo '<br>';

echo '?????????????????????????????????????????';

// e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

foreach ($array as $key => $subArray) {
    $subArray = $array[0];
    $subArray0Sum = array_sum($subArray); 
}
echo "Antro lygio masyvų elementų sumos: $subArray0Sum \n";