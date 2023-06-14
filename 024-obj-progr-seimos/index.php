<?php

echo '<pre>';

require __DIR__ . '/Miskas.php'; // tevine klase - visada virsuje
require __DIR__ . '/Zveris.php'; // vaikine klase
require __DIR__ . '/Paukstis.php'; // vaikine klase


$bebras = new Zveris('Bebras', 5);

$briedis = new Zveris('Briedis', 12);

$genys = new Paukstis('Genys', 7);


$bebras->run();

$genys->fly();

echo $bebras->getArea();
echo $genys->getArea();

echo '<br>';
echo $genys->color;

var_dump($bebras);
var_dump($briedis);
var_dump($genys);