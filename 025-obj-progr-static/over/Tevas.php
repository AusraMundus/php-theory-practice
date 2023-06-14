<?php


class Tevas {

    static public $social = 'FB';

    static public function what()
    {
        // echo self::$social; // !!!!! self - referina i tevo klases kintamaji, neoverraidina vaiko savybes
        echo static::$social; // static - referina jau overraidinta vaiko savybe
    }

    public function __construct()
    {
        echo '<h1>Tevas</h1>';
    }

}