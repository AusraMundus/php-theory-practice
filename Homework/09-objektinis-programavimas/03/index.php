<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

// 3. (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.

echo '<pre>';

echo '<pre>';

require __DIR__ . '/Kibiras2.php';


$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;

$kibiras1->pridetiDaugAkmenu(5);
$kibiras2->pridetiDaugAkmenu(10);
$kibiras3->pridetiDaugAkmenu(15);

$kibiras1->kiekPririnktaAkmenu();
$kibiras2->kiekPririnktaAkmenu();
$kibiras3->kiekPririnktaAkmenu();

Kibiras2::akmenuKiekisVisuoseKibiruose();
