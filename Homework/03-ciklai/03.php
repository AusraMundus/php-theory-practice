<?php

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