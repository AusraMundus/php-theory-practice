<?php

echo "<pre>";

// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo '____4 užduotis___<br><br>';

$name_4 = 'Blake';
$last_name_4 = 'Lively';

$last_3_letters_combo = substr($name_4, -3) . substr($last_name_4, -3);
echo $last_3_letters_combo;
