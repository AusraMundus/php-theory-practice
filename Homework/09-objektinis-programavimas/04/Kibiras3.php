<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

// 4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.


class Kibiras3 {

    private $akmenuKiekis;

    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}
