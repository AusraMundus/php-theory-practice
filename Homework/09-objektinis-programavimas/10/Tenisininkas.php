<?php

/*
(STATIC) Sukurti klasę Tenisininkas. Klasė Tenisininkas turi privačią savybę vardas, privačią savybę kamuoliukas  (true jei turi ir false jei ne) privačią static savybę zaidejas1, privačią static savybę zaidejas2 (žaidėjų objektams saugoti)  Klasė turi tokius metodus: 
A. Public arTuriKamuoliuka();
B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas objektui;
C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam žaidėjo objektui;
Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas. Iškviesti statinį metodą zaidimoPradzia() ir kažkuriam žaidėjui priskirti kamuoliuką. Žaidėjo objekto metodu perduotiKamuoliuka() perduoti kamuoliuką kitam žaidėjui. Žaidėjas, kuris neturi kamuoliuko, perduoti kitam negali.
*/

class Tenisininkas
{

    private $vardas;
    private $kamuoliukas;

    static private $zaidejas1;
    static private $zaidejas2;

    // iskvieciame 2 objektus
    public function __construct($vardas)
    {
        $this->vardas = $vardas;
        $this->kamuoliukas = false;
    }

    public function getZaidejoVardas() {
        return $this->vardas;
    }

    // nustatome, ar yra zaidejai
    static public function getZaidejas($vardas)
    {
        if (!isset(self::$zaidejas1)) {
            return self::$zaidejas1 = new self($vardas);
        }
        if (!isset(self::$zaidejas2)) {
            return self::$zaidejas2 = new self($vardas);
        }
    }

    // suzinoti, ar zaidejas turi kamuoliuka, nes kamuoliukas private savybe
    public function arTuriKamuoliuka()
    {
        return $this->kamuoliukas;
    }

    // paleidziam zaidima ir random priskiriam zaidejui kamuoliuka
    static public function zaidimoPradzia()
    {
        $skaicius = rand(1, 2);
        if ($skaicius === 1) {
            self::$zaidejas1->kamuoliukas = true;
        } else {
            self::$zaidejas2->kamuoliukas = true;
        }
    }

    // 
    public function perduotiKamuoliuka()
    {
        if ($this->kamuoliukas) {

            if ($this === self::$zaidejas1) {
                $this->kamuoliukas = false;
                self::$zaidejas2->kamuoliukas = true;
                echo 'Kamuoliukas buvo perduotas iš ' . $this->vardas . ', ' . self::$zaidejas2->vardas;
            } else {
                $this->kamuoliukas = false;
                self::$zaidejas1->kamuoliukas = true;
                echo 'Kamuoliukas buvo perduotas iš ' . $this->vardas . ', ' . self::$zaidejas1->vardas;
            }

        } else {
            echo 'Neturiu kamuoliuko';
        }
    }
}
