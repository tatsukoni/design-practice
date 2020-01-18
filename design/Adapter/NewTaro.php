<?php
require_once 'Taro.php';
require_once 'Chairperson.php';

class NewTaro extends Taro implements Chairperson
{
    public function organizeClass()
    {
        $this->enjoyWithAllClassmate();
    }
}
