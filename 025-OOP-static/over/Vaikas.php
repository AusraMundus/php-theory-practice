<?php


class Vaikas extends Tevas
{

    static public $social = 'TIK-TOK';

    /* overload - kai funkcijos yra tais paciais vardais toje pacioje klaseje, tik skirtingais argumentais
    public function one(int $arg) {}
    public function one(istring $arg) {}
    */

    public function __construct()
    {
        // parent - galim kartu overraitinti ir pasiekti originalu tevo metoda. Tik vienu aukstu galima pasiekti
        parent::__construct();
        
        echo '<h1>Vaikas</h1>';
    }

}
