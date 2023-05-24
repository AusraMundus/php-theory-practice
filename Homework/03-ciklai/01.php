<?php

echo '____1 užduotis___<br><br>';

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
// a. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// b. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;

$star = '*';

for ($i = 1; $i <= 400; $i++) {
    echo "<div style='display: inline-block;'>$star</div>";
}

echo '<br><br>';

$star2 = '*';

for ($i = 1; $i <= 400; $i++) {
    echo $star2;
    if ($i % 50 == 0) {
        echo $star2 . '<br>';
    }
}