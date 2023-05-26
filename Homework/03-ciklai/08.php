<?php

echo '<pre>';

echo '____8 užduotis___<br><br>';

// 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

$rhombusSize = 21;

// Random spalva
function randomColor()
{
  $red = rand(0, 255);
  $green = rand(0, 255);
  $blue = rand(0, 255);
  return "rgb(".$red.",".$green.",".$blue.")";
}

// Rombo virsutine dalis
for($i = 0; $i < $rhombusSize; $i++) {
    // Tarpai
    for($j = 0; $j < $rhombusSize - $i - 1; $j++) {
      echo " ";
    }
    // Spalvos
    for($j = 0; $j < 2*$i+1; $j++) {
      $color = randomColor();
      echo "<span style='color:".$color."'>*</span>";
    }
    echo "<br>";
  }
  
  // Rombo apatine dalis
  for($i = $rhombusSize-2; $i >= 0; $i--) {
    // Tarpai
    for($j = 0; $j < $rhombusSize - $i - 1; $j++) {
      echo " ";
    }
    // Spalvos
    for($j = 0; $j < 2*$i+1; $j++) {
      $color = randomColor();
      echo "<span style='color:".$color."'>*</span>";
    }
    echo "<br>";
  }