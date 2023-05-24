<?php

echo '<pre>';

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį: "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

echo '____1 užduotis___<br><br>';

$name = 'Laura';
$lastName = 'Morkutė';
$birthYear = '1990';
$currentYear = '2023';

$age = $currentYear - $birthYear;
echo "As esu $name $lastName. Man yra $age metai(ų).";