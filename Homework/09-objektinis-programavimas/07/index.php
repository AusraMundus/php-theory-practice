<?php

// 7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).

echo '<pre>';

require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Grybas.php';

$manoKrepsys = new Krepsys;

do {
    $grybas = new Grybas;
    if ($grybas->arGeras()) {
        $manoKrepsys->ideti($grybas->svoris);
        echo 'Idėtas grybukas ' . $grybas->svoris . '<br>';
    }
} while (!$manoKrepsys->arPilnas());

echo 'Pririnkta grybų, g: ' . $manoKrepsys->kiekis;

// echo Krepsys::DYDIS;