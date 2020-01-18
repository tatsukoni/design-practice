<?php
require_once 'Hanzai.php';

abstract class WoodCutPrint
{
    protected abstract function draw(Hanzai $hanzai): string;

    protected abstract function cut(Hanzai $hanzai): string;

    protected abstract function print(Hanzai $hanzai): string;

    public function createWoodCutPrint(string $object)
    {
        $hanzai = new Hanzai($object);

        // 一連の処理の流れ
        echo $this->draw($hanzai);
        echo $this->cut($hanzai);
        echo $this->print($hanzai);
    }
}
