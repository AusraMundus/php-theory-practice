<?php

echo "<pre>";

// 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

echo '____1 užduotis___<br><br>';

$name = 'Ryan';
$last_name = 'Reynolds';

if (strlen($name) < strlen($last_name)) {
    echo $name;
} else {
    echo $last_name;
};

echo '<br><br>';

// Ternary
$shorter_name = strlen($name) < strlen($last_name) ? $name : $last_name;
echo $shorter_name;

echo '<br><br><br>';

// 2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

echo '____2 užduotis___<br><br>';

// The strtoupper() function converts a string to uppercase
// The strtolower() function converts a string to lowercase.

$name_2 = 'Will';
$last_name_2 = 'Smith';
echo strtoupper($name_2) . ' ' . strtolower($last_name_2); 

echo '<br><br><br>';

// 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo '____3 užduotis___<br><br>';

$name_3 = 'Bruce';
$last_name_3 = 'Willis';

// The substr() function returns a part of a string.
$first_letters_combo = substr($name_3, 0, 1) . substr($last_name_3, 0, 1);
echo $first_letters_combo;

echo '<br><br>';

// using "square brackets"
$first_letters_combo_2 = $name_3[0] . $last_name_3[0];
echo $first_letters_combo_2;

echo '<br><br><br>';

// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo '____4 užduotis___<br><br>';

$name_4 = 'Blake';
$last_name_4 = 'Lively';

$last_3_letters_combo = substr($name_4, -3) . substr($last_name_4, -3);
echo $last_3_letters_combo;

echo '<br><br><br>';

// 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

echo '____5 užduotis___<br><br>';

// str_ireplace() function replaces some characters with some other characters in a string
$movie = "An American in Paris";
$movie = str_ireplace(['a', 'A'], '*', $movie); 
echo $movie;

echo '<br><br><br>';

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

echo '<br><br><br>';

// 7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

echo '____7 užduotis___<br><br>';

$movie_3 = "An American in Paris";
$movie_3 = str_ireplace(['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'], '', $movie_3);
echo $movie_3;

echo '<br><br>';

$movie_4 = "Breakfast at Tiffany's";
$movie_4 = str_ireplace(['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'], '', $movie_4);
echo $movie_4;

echo '<br><br>';

// preg_replace() function returns a string or array of strings where all matches of a pattern or list of patterns found in the input are replaced with substrings.
$movie_5 = "2001: A Space Odyssey";
$movie_5 = preg_replace('/[aeiouy]/i', '', $movie_5);
echo $movie_5;

echo '<br><br>';

$movie_6 = "It's a Wonderful Life";
$movie_6 = preg_replace('/[aeiouy]/i', '', $movie_6);
echo $movie_6;

echo '<br><br><br>';

// 8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

echo '____8 užduotis___<br><br>';

// str_repeat function repeats a string a specified number of times.
$episode = 'Star Wars: Episode ' . str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';
$episode = preg_replace('/[\s]{0,5}/', '', $episode);
echo $episode;

echo '<br><br><br>';

// 9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

echo '____9 užduotis___<br><br>';

$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

// explode stringa, surasti zodzius <= 5 raides, suskaiciuoti tuos zodzius.