<?php

echo "<pre>";

// 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

echo '____9 užduotis___<br><br>';

$sentence = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
// explode() function to split the string into an array of individual words based on whitespace.
$words = explode(" ", $sentence);
$total = 0;
// count() function return the number of elements in an array
// For each word, the code checks if its length, as determined by the strlen() function, is less than or equal to 5. 
for ($i = 0; $i < count($words); $i++) {
    if (strlen($words[$i]) <= 5) {
        $total++;
    }
}
echo $total;

echo '<br><br>';

$sentence_2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

// mb_strlen() - Gets the length of a string. A multi-byte character is counted as 1. Good for all characters count (LT...)
$words_2 = explode(" ", $sentence_2);
$total_2 = 0;
for ($i = 0; $i < count($words_2); $i++) {
    if (mb_strlen($words_2[$i]) <= 5) {
        $total_2++;
    }
}
echo $total_2;