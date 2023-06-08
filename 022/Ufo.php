<?php

// Objektinis programavimas: vienai klasei - vienas failas,  klases vardas is didziosios, failo pavadinimas kaip klases pavadinimas

// Objekto viduje - kintamasis, objekto savybe. Funkcija - klases kontekste vadinama metodu.

// Deklaruojant kintamaji, reikia pasakyti, kokio matomumo (lygio) jis yra: public, protected ar private.
// Funkcijos turi ta pati matomuma kaip ir kintamieji.

// public - visiems laisvai prieinama (pvz., dezute guli namo kieme) - - Rodo kieme (index.php)
// protected - prieinama tik tam tikram ratui (pvz., dezute yra namo bute)
// private - prieinama tik su leidimu (pvz., dezute guli seife, kuri gali atrakinti tik su raktu) - Nerodo kieme (index.php)-Fatal error

class Ufo
{

    // Savybe. Savybes deklaracija
    public $speed = 5;

    // Funkcija - metodas
    private function whatTime(): string // kintamojo tipas - reikia nurodyti, ka grazina metodas. Gali buti string, array, int.... Del klaidu paiesku labai gerai
    {
        return date('i:s');
    }

    public function turbo(): int
    {
        return $this->speed * 3; // $this - jei nori kazka pasiekti tame objekte, rasome $this
    }


    public function whatTimeBig(): string 
    {
        return '<h1>' . $this->whatTime() . '</h1>';
    }
}
