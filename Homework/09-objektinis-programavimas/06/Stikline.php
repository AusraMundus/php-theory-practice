<?php

// 6. Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

class Stikline
{

    private $turis, $kiekis;

    public function __construct($size)
    {
        $this->turis = $size;
        $this->kiekis = 0;
    }

    public function ipilti($volume) : void
    {
        if ($this->turis >= $volume + $this->kiekis) {
            $this->kiekis += $volume;
        } else {
            $this->kiekis = $this->turis;
        }
    }

    public function ispilti() : int
    {
        $likutis = $this->kiekis;
        $this->kiekis = 0;
        return $likutis;
    }

}
