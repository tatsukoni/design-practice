<?php
require_once 'Cuttable.php';

abstract class WoodCutPrint
{
    protected abstract function draw(Cuttable $cuttable): string;

    protected abstract function cut(Cuttable $cuttable): string;

    protected abstract function print(Cuttable $cuttable): string;

    // インスタンス生成処理
    public function createInstance(string $object)
    {
        return new Cuttable($object);
    }

    public function createWoodCutPrint(string $object)
    {
        $wood = $this->createInstance($object);

        // 一連の処理の流れ
        echo $this->draw($wood);
        echo $this->cut($wood);
        echo $this->print($wood);
    }
}
