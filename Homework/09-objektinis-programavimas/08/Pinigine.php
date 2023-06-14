<?php

// 8. Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui.

// 2. Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.


class Pinigine
{

    private $popieriniaiPinigai = [], $metaliniaiPinigai = [];

    public function ideti($kiekis): void
    {
        if ($kiekis > 2) {
            $this->popieriniaiPinigai[] = $kiekis;
        } else {
            $this->metaliniaiPinigai[] = $kiekis;
        }
    }

    public function skaiciuoti(): void
    {
        echo '<h1>Viso:</h1>Popieriniai pinigai: ' . array_sum($this->popieriniaiPinigai) . ' <br>Metaliniai pinigai: ' . array_sum($this->metaliniaiPinigai);
        echo '<h1>Kiekis:</h1>Popieriniai pinigai: ' . count($this->popieriniaiPinigai) . ' <br>Metaliniai pinigai: ' . count($this->metaliniaiPinigai);
    }
}
