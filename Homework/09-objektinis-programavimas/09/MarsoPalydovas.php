<?php


class MarsoPalydovas
{
    private static $instance = [];
    private $title;

    private function __construct($title)
    {
        $this->title = $title;
    }

    public static function getMarsoPalydovas()
    {
        if (!isset(self::$instance[0])) {
            return self::$instance[0] = new self('Deimas');
        }
        if (!isset(self::$instance[1])) {
            return self::$instance[1] = new self('Fobas');
        }
        return self::$instance[rand(0, 1)];
    }
    
}
