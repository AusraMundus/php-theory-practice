<?php

echo '<pre>';

echo '____1 užduotis___<br><br>';

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
// a. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// b. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;

$star = '*';

for ($i = 1; $i <= 400; $i++) {
    echo "<div style='display:inline-block'>$star</div>";
}

echo '<br><br>';

$star2 = '* ';

for ($i = 1; $i <= 400; $i++) {
    echo $star2;
    if ($i % 50 == 0) {
        echo $star2 . '<br>';
    }
}
/*
$squareLine = 100;
for ($i = 0; $i < $squareLine; $i++) {
    for($x = 0; $x < $squareLine; $x++) {
        echo "* ";
    }
    echo "\n";
}
*/


echo '<br><br><br>';

echo '____2 užduotis___<br><br>';

// 2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

$count = 0;

for ($i = 0; $i < 300; $i++) {
    $number = rand(0, 300);
    
    if ($number > 150) {
        $count++;
    }

    if ($number > 275) {
        echo "<span style='color:red'>" . $number . "</span> ";
    } else {
        echo $number . " ";
    }
}
echo '<br><br>Didesnių už 150 yra: ' . $count;


echo '<br><br><br>';

echo '____3 užduotis___<br><br>';

// 3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

$randNumber = rand(3000, 4000); // random skaicius 3000-4000
$number77 = ''; // kintamasis inicijuojamas kaip tuscias stringas
$numberFirst = true; // pirmas skaicius yra pirmas

for ($i = 1; $i <= $randNumber; $i++) { // ciklas prasuka visus skaicius nuo 1 iki random 3000-4000
    if ($i % 77 == 0) {   // patikrina, ar dalinasi is 77
        if ($numberFirst === false) { // jei ne pirmas skaicius, kablelis ir taskas pridedamas pries skaiciaus
            $number77 .= ', ' . $i;
        } else {
            $numberFirst = false; // jei pirmas, kablelis ir taskas nepridedamas pries skaiciaus
            $number77 .= $i; // ima visus tinkamus skaicius ir sudeda i eilute su kableliais ir tarpais
        }
    }
}
echo "<div style='display:inline-block'>$number77</div>";


echo '<br><br><br>';

echo '____4 užduotis___<br><br>';

// 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.

$squareLine = 100;
for ($i = 0; $i < $squareLine; $i++) {
    for($x = 0; $x < $squareLine; $x++) {
        echo "* ";
    }
    echo "\n";
}


echo '<br><br><br>';

echo '____5 užduotis___<br><br>';

// 5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

$squareLine = 100;
for ($i = 0; $i < $squareLine; $i++) {
    for($x = 0; $x < $squareLine; $x++) {
        if ($i == $x || $i == $squareLine - 1 - $x) {
            echo "<span style='color: red'>* </span>";
        } else {
            echo "* ";
        }
    }
    echo "\n";
}
