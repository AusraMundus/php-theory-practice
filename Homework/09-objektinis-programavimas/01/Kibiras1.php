<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

class Kibiras1
{
    private $akmenuKiekis = 0;

    public function prideti1Akmeni() : int
    {
        $this->akmenuKiekis += 1;
        return $this->akmenuKiekis;
    }

    public function pridetiDaugAkmenu($kiekis) : int
    {
        $this->akmenuKiekis += $kiekis;
        return $this->akmenuKiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}