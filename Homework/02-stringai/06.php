<?php

echo "<pre>";

// 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

echo '____6 užduotis___<br><br>';

$movie_2 = "An American in Paris";

// substr_count() function counts the number of times a substring occurs in a string.
echo substr_count($movie_2, 'a') + substr_count($movie_2, 'A');

echo '<br><br>';

//kitas būdas
$lower_letter = substr_count($movie_2, 'a');
$upper_letter = substr_count($movie_2, 'A');
$total = $lower_letter + $upper_letter;
echo $total;
