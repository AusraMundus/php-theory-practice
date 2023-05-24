<?php

echo "<pre>";

// 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

echo '____5 užduotis___<br><br>';

// str_ireplace() function replaces some characters with some other characters in a string
$movie = "An American in Paris";
$movie_changed = str_ireplace(['a', 'A'], '*', $movie); 
echo $movie_changed;