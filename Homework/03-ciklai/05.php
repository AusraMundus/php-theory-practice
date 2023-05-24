<?php

echo '____5 užduotis___<br><br>';

// 5. Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

$squareLine = 100;
for ($i = 0; $i < $squareLine; $i++) {
    for($x = 0; $x < $squareLine; $x++) {
        if ($i == $x || $i == $squareLine - 1 - $x) {
            echo "<span style='color: red'>*</span>";
        } else {
            echo "*";
        }
    }
    echo '<br>';
}
