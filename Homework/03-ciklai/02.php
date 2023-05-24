<?php

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
