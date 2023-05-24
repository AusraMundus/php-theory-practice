<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

echo '____5 užduotis___<br><br>';

$numA = rand(0, 2);
$numB = rand(0, 2);
$numC = rand(0, 2);
$numD = rand(0, 2);

$countZero = 0; // Kintamasis, skaičiuoti visus 0.
$countOne = 0; // Kintamasis, skaičiuoti visus 1.
$countTwo = 0; // Kintamasis, skaičiuoti visus 2.

if ($numA == 0) $countZero++;
elseif ($numA == 1) $countOne++;
else $countTwo++;
  
if ($numB == 0) $countZero++;
elseif ($numB == 1) $countOne++;
else $countTwo++;
  
if ($numC == 0) $countZero++;
elseif ($numC == 1) $countOne++;
else $countTwo++;
  
if ($numD == 0) $countZero++;
elseif ($numD == 1) $countOne++;
else $countTwo++;

echo "$numA, $numB, $numC, $numD";
echo '<br><br>';
echo "Nulių yra: $countZero. Vienetų yra: $countOne. Dvejetų yra: $countTwo.";