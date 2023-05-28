<?php

echo '<pre>';

echo '____10 užduotis___<br><br>';

// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.

$number1 = rand(5, 25); // pirmi du skaiciai - random
$number2 = rand(5, 25);
$number3 = $number1 + $number2; // trecias - pirmu dvieju suma...
$number4 = $number2 + $number3;
$number5 = $number3 + $number4;
$number6 = $number4 + $number5;
$number7 = $number5 + $number6;
$number8 = $number6 + $number7;
$number9 = $number7 + $number8;
$number10 = $number8 + $number9;

$array = [$number1, $number2, $number3, $number4, $number5, $number6, $number7, $number8, $number9, $number10];
print_r($array);