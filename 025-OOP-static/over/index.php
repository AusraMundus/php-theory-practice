<?php


require __DIR__ . '/Tevas.php';
require __DIR__ . '/Vaikas.php';



echo Vaikas::$social;
echo '<br>';
echo Tevas::$social;
echo '<br>';
echo '<br>';


echo Vaikas::what();
echo '<br>';
echo Tevas::what();
echo '<br>';

$v = new Vaikas;

/* overload
$v = new Vaikas;
$v->one(1);
$v->one('labas');
*/