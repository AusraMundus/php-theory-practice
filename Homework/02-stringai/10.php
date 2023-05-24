<?php

echo "<pre>";

// 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

echo '____10 užduotis___<br><br>';

// str_shuffle() function randomly shuffles all the characters of a string.

$latin_alphabet = 'abcdefghijklmnopqrstuvwxyz';
$random_letters = str_shuffle($latin_alphabet);
$string_length = 3;

$random_letter_string = substr($random_letters, 0, $string_length); // The substr() function. Syntax: substr(string,start,length)
echo $random_letter_string;

echo '<br><br>';
// trumpiau
echo substr(str_shuffle($latin_alphabet), 0, 3);