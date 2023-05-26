<?php

echo '<pre>';

echo '____2 užduotis___<br><br>';

// 2. Naudodamiesi 1 uždavinio masyvu:
// a. Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b. Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
// c. Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
// d. Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e. Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f. Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g. Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h. Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i. Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

$array = [];

for ($i = 0; $i < 30; $i++) {
    $randomNumber = rand(5, 25);
    $array[] = $randomNumber;
}

foreach ($array as $key => $value) {
    echo "$key => $value\n";
}

echo '<br><br>';
// a. Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$count = 0;
foreach ($array as $value) {
    if ($value > 10) {
        $count++;
    }
}
echo 'Masyve reikšmių didesnių už 10 yra: ' . $count;

echo '<br><br>';
// b. Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

$maxValue = max($array);  // max() - funkcija, surasti didžiausią masyvo reikšmę
$maxValueIndex = [];

foreach ($array as $key => $value) { 
    if ($value === $maxValue) { 
        $maxValueIndex[] = $key;
    } 
}
echo "Didžiausia masyvo reikšmė: $maxValue, indeksas(ai): " . implode(", ", $maxValueIndex); // implode() - funkcija, kad sujungtų indeksus su kableliu į eilutę.

echo '<br><br>';
// c. Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

$sum = 0;
foreach ($array as $value) {
    if ($value % 2 === 0) {
        $sum += $value;
    }
}
echo 'Visų porinių (lyginių) indeksų reikšmių suma: ' . $sum;

echo '<br><br>';
// d. Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$newArray = [];

foreach ($array as $key => $value) {
    $newArray[] = $value - $key;
}
print_r($newArray);

echo '<br><br>';

// e. Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for ($i = 0; $i < 10; $i++) {
    $randomNumber = rand(5, 25);
    $newArray[] = $randomNumber;
}
print_r($newArray);

echo '<br><br>';

// f. Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

foreach ($newArray as $key => $value) {
    if ($key % 2 === 0) {
        $lyginiaiArray[] = $value;
    } else {
        $nelyginiaiArray[] = $value;
    }
}
print_r($lyginiaiArray);
print_r($nelyginiaiArray);

echo '<br><br>';

// g. Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach ($newArray as $key => &$value) {
    if ($key % 2 === 0 && $value > 15) {
        $value = 0;
    }
}

unset($value);
print_r($newArray);

echo '<br><br>';

// h. Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// 5, 12, 9
foreach ($newArray as $key => $value) {
    if ($value > 10) {
        echo $key;
        break;
    }
}

echo '<br><br>';

// i. Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

foreach ($newArray as $key => $value) {
    if ($key % 2 === 0) {
        unset($newArray[$key]);
    }
}
print_r($newArray);