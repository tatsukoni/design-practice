<?php
require_once 'Taro.php';

class Hanako implements Chairperson
{
    private $taro;

    public function __construct()
    {
        $this->taro = new Taro();
    }

    public function organizeClass()
    {
        $this->taro->enjoyWithAllClassmate();
    }
}
