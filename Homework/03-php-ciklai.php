<?php

echo '____1 užduotis___<br><br>';

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
// a. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// b. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;

for ($i = 1; $i <= 400; $i++) {
    $star = '*';
    echo "<div style='display:inline-block;'>$star</div>";
}

echo '<br><br>';

$star = '*';
for ($i = 1; $i <= 400; $i++) {
    echo $star;
    if ($i % 50 == 0) {
        echo $star . "<br>";
    }
}

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

echo "<br><br>Didesnių už 150 yra " . $count;
