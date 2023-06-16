<?php

// 7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).

class Grybas
{

    private $valgomas, $sukirmijes, $svoris;

    public function __construct()
    {
        $this->valgomas = rand(0, 1);
        $this->sukirmijes = rand(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function arGeras() : bool
    {
        if ($this->valgomas || !$this->sukirmijes) {
            return true;
        } else {
            return false;
        }
    }

    public function __get($svoris)
    {
        return $this->svoris;
    }
}
