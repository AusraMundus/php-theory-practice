<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

echo '<pre>';

require __DIR__ . '/Kibiras1.php';


$petro = new Kibiras1;

$ievos = new Kibiras1;


$petro->prideti1Akmeni();
$ievos->prideti1Akmeni();

$petro->pridetiDaugAkmenu(7);
$ievos->pridetiDaugAkmenu(9);

$petro->kiekPririnktaAkmenu();
$ievos->kiekPririnktaAkmenu();



/* Mano variantas

$kibiras = new Kibiras1;
var_dump($kibiras);
echo '<br><br>';

echo 'Pridėti 1 akmenį: ';
echo $kibiras->prideti1Akmeni();
echo '<br><br>';

echo 'Pridėti daug akmenų: ';
$kiekis = 100;
echo $kibiras->pridetiDaugAkmenu($kiekis);
echo '<br><br>';

echo 'Akmenų pririnkta: ';
echo $kibiras->kiekPririnktaAkmenu();
echo '<br><br>';

*/

