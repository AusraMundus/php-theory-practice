<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.

echo '____4 užduotis___<br><br>';

$borderA = rand(0, 10);
$borderB = rand(0, 10);
$borderC = rand(0, 10);

// P = a + b + c. Bet kurių dviejų kraštinių suma yra didesnė už trečiosios kraštinės ilgį.
if ((($borderA + $borderB) > $borderC) && (($borderB + $borderC) > $borderA) && (($borderC + $borderA) > $borderB)) echo "Su kraštinėmis $borderA , $borderB ir $borderC trikampį galima sudaryti.";
else echo "Su kraštinėmis $borderA , $borderB ir $borderC trikampio negalima sudaryti.";
