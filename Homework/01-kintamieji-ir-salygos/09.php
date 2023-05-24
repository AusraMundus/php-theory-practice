<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

echo '____9 užduotis___<br><br>';

$numeroUno = rand(0, 100);
$numeroDos = rand(0, 100);
$numeroTres = rand(0, 100);

// Aritmetinis vidurkis
$regularAverage = round(($numeroUno + $numeroDos + $numeroTres) / 3);
echo $regularAverage;

echo '<br><br>';
// Aritmetinis vidurkis, atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90.

$otherNumeroCount = 0; // Kintamasis, skirtas norint suskaičiuoti įvestų reikšmių kiekį.
$otherNumeroSum = 0; // Kintamasis, skirtas suskaičiuoti reikšmių sumą, kuri reikalinga vidurkiui skaičiuoti.

// Patikrina visus kintamuosius, ar atitinka sąlygą.
if ($numeroUno > 10 && $numeroUno < 90) { // Patikrina, ar $music1 reikšmė yra nuo 10 iki 90.
    $otherNumeroCount++; // Jei taip, ji padidina kintamąjį $otherNumeroCount vienetu...
    $otherNumeroSum += $numeroUno;  // ir prideda $numeroUno reikšmę prie kintamojo $otherNumeroSum.
}
if ($numeroDos > 10 && $numeroDos < 90) {
    $otherNumeroCount++;
    $otherNumeroSum += $numeroDos;
}
if ($numeroTres > 10 && $numeroTres < 90) {
    $otherNumeroCount++;
    $otherNumeroSum += $numeroTres;
}

if($otherNumeroCount == 3) { // Jei visų kintamųjų reikšmės atitinka sąlygą...
    $otherAverage = round($otherNumeroSum / $otherNumeroCount); // dalina reikšmių sumą iš kintamųjų skaičiaus
    echo $otherAverage;
} else {
    echo "Reikšmės neatitinka sąlygos.";
}