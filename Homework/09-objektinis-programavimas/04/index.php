<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

// 4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.


echo '<pre>';

require __DIR__ . '/Kibiras3.php'; // tevine klase
require __DIR__ . '/KibirasNePo1.php';

$manoKibiras = new KibirasNePo1;

$manoKibiras->prideti1Akmeni();
$manoKibiras->prideti1Akmeni();

echo 'Akmenų pririnkta: ' . $manoKibiras->kiekPririnktaAkmenu();