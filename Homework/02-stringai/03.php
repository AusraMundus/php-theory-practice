<?php

echo "<pre>";

// 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo '____3 užduotis___<br><br>';

$name_3 = 'Bruce';
$last_name_3 = 'Willis';

// The substr() function returns a part of a string, beginning at a specified character position, and a specified number of characters long. Syntax: substr(string,start,length)
$first_letters_combo = substr($name_3, 0, 1) . substr($last_name_3, 0, 1);
echo $first_letters_combo;

echo '<br><br>';

// using "square brackets"
$first_letters_combo_2 = $name_3[0] . $last_name_3[0];
echo $first_letters_combo_2;