<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

echo '____7 užduotis___<br><br>';

$coloredNumber = rand(-10, 10);

if ($coloredNumber < 0) echo "<span style='color:green'>$coloredNumber</span>";
else if ($coloredNumber  == 0) echo "<span style='color:red'>$coloredNumber</span>";
else echo "<span style='color:blue'>$coloredNumber</span>";