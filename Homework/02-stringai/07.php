<?php

echo "<pre>";

// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

echo '____7 užduotis___<br><br>';

$movie_3 = "An American in Paris";
$movie_3_changed = str_ireplace(['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'], '', $movie_3);
echo $movie_3_changed;

echo '<br><br>';

$movie_4 = "Breakfast at Tiffany's";
$movie_4_changed = str_ireplace(['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'], '', $movie_4);
echo $movie_4_changed;

echo '<br><br>';

// preg_replace() function returns a string or array of strings where all matches of a pattern or list of patterns found in the input are replaced with substrings.
$movie_5 = "2001: A Space Odyssey";
$movie_5_changed = preg_replace('/[aeiouy]/i', '', $movie_5);
echo $movie_5_changed;

echo '<br><br>';

$movie_6 = "It's a Wonderful Life";
$movie_6_changed = preg_replace('/[aeiouy]/i', '', $movie_6);
echo $movie_6_changed;