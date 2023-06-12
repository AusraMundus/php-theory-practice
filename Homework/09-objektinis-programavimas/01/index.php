<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

echo '<pre>';

require __DIR__ . '/Kibiras1.php';

$kibiriukas = new Kibiras1;

echo 'Pridėti 1 akmenį: ';
echo $kibiriukas->prideti1Akmeni();
echo '<br>';

echo 'Pridėti daug akmenų: ';
$kiekis = 100;
echo $kibiriukas->pridetiDaugAkmenu($kiekis);
echo '<br>';

echo 'Akmenų pririnkta: ';
echo $kibiriukas->kiekPririnktaAkmenu();