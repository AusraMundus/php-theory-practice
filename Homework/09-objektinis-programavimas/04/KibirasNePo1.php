<?php

class KibirasNePo1 extends Kibiras3 {

    public function prideti1Akmeni()
    {
        
        $this->akmenuKiekis += rand(2, 5);

        // Mano variantas
        // $kiekis = rand(2, 5);
        // $this->pridetiDaugAkmenu($kiekis);
    }

}
