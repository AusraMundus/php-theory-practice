<?php

echo '<pre>';

echo '____8 užduotis___<br><br>';

// 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

$diagonalLength = 21; // Replace 5 with your desired diagonal length

// Function to generate a random color
function randomColor()
{
  $red = rand(0, 255);
  $green = rand(0, 255);
  $blue = rand(0, 255);
  return "rgb(".$red.",".$green.",".$blue.")";
}

// Generate the top half of the rhombus
for($i = 0; $i < $diagonalLength; $i++) {
    // Print spaces before the asterisks
    for($j = 0; $j < $diagonalLength - $i - 1; $j++) {
      echo " ";
    }
    // Print the random colored asterisks for the diagonal lines
    for($j = 0; $j < 2*$i+1; $j++) {
      $color = randomColor();
      echo "<span style='color:".$color."'>*</span>";
    }
    echo "<br>";
  }
  
  // Generate the bottom half of the rhombus
  for($i = $diagonalLength-2; $i >= 0; $i--) {
    // Print spaces before the asterisks
    for($j = 0; $j < $diagonalLength - $i - 1; $j++) {
      echo " ";
    }
    // Print the random colored asterisks for the diagonal lines
    for($j = 0; $j < 2*$i+1; $j++) {
      $color = randomColor();
      echo "<span style='color:".$color."'>*</span>";
    }
    echo "<br>";
  }