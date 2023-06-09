<?php

// 7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).

class Krepsys
{

    const DYDIS = 500;

    private $kiekis = 0;

    public function ideti($gryboSvoris): void
    {
        $this->kiekis += $gryboSvoris;
    }

    public function arPilnas(): bool
    {
        if ($this->kiekis >= self::DYDIS) {
            return true;
        } else {
            return false;
        }
    }

    public function __get($kiekis)
    {
        return $this->kiekis;
    }
}


/* KITAS BUDAS

class Krepsys {

    const DYDIS = 500;
    private $svoris = 0;

    public function deti(Grybas $grybas): bool
    {
        if ($grybas->valgomas && !$grybas->sukirmijes) {
            $this->svoris += $grybas->svoris;
            return self::DYDIS >= $this->svoris;
        }
        return true;
    }

}

*/