<?php

// 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.

class Kibiras1
{
    private $akmenuKiekis;

    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(): void
    {
        // return $this->akmenuKiekis; <--- reiketu grazinima daryti
        echo '<h1>Akmenų pririnkta: ' . $this->akmenuKiekis . '</h1>';
    }
}

/* Mano variantas

class Kibiras1
{
    private $akmenuKiekis = 0;

    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() : int
    {
        return $this->akmenuKiekis;
    }
}

*/