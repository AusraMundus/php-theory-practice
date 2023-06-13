<?php

class KibirasNePo1 extends Kibiras3 {

    public function prideti1Akmeni()
    {
        $kiekis = rand(2, 5);
        $this->pridetiDaugAkmenu($kiekis);
    }

}
