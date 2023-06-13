<?php

// 2. Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.


echo '<pre>';

require __DIR__ . '/Pinigine.php';


$manoPinigine = new Pinigine;

$manoPinigine->ideti(5);
$manoPinigine->ideti(1);
$manoPinigine->ideti(1);
$manoPinigine->ideti(10);
$manoPinigine->ideti(500);

$manoPinigine->skaiciuoti();


/* Mano variantas

$pinigine = new Pinigine;

$kiekis = 1;
echo $pinigine->ideti($kiekis);
echo '<br><br>';

echo $pinigine->skaiciuoti();
echo '<br><br>';

var_dump($pinigine);
echo '<br><br>';
*/