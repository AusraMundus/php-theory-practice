<?php


class Kibiras2
{
    static private $akmenuKiekisVisuoseKibiruose = 0;
    
    private $akmenuKiekis;

    static public function akmenuKiekisVisuoseKibiruose(): void
    {
        echo '<h1>Akmenų kiekis visuose kibiruose: ' . self::$akmenuKiekisVisuoseKibiruose . '</h1>';
    }

    public function __construct($kiekis = 0)
    {
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni(): void
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }

    public function kiekPririnktaAkmenu(): void
    {
        // return $this->akmenuKiekis; <--- reiketu grazinima daryti
        echo '<h1>Akmenų pririnkta: ' . $this->akmenuKiekis . '</h1>';
    }
}