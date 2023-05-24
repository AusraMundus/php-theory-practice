<?php

echo '____4 užduotis___<br><br>';

// 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.

$squareLine = 100;
for ($i = 0; $i < $squareLine; $i++) {
    for($x = 0; $x < $squareLine; $x++) {
        echo "*";
    }
    echo "\n";
}