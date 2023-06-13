<?php

// 2. Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

class Pinigine {

    private $popieriniaiPinigai = 0, $metaliniaiPinigai = 0;

    public function ideti($kiekis) : void
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        } else {
            $this->metaliniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti() : void
    {
        echo '<h1>Popieriniai pinigai: ' . $this->popieriniaiPinigai . '<br>Metaliniai pinigai: ' . $this->metaliniaiPinigai . '</h1>';
    }

}

/* Mano variantas

class Pinigine
{
    private $popieriniaiPinigai = 0;

    private $metaliniaiPinigai = 0;

    public function ideti($kiekis) : int
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
            return $this->popieriniaiPinigai;
        } else {
            $this->metaliniaiPinigai += $kiekis;
            return $this->metaliniaiPinigai;
        }
    }

    public function skaiciuoti() : int
    {
        $suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        return $suma;
    }
}
*/