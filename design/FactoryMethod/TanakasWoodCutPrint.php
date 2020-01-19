<?php
require_once 'WoodCutPrint.php';
require_once 'Potato.php';

class TanakasWoodCutPrint extends WoodCutPrint
{
    // インスタンス生成メソッドを上書き
    public function createInstance(string $object)
    {
        return new Potato($object);
    }

    public function draw(Cuttable $cuttable): string
    {
        return $cuttable->create() . 'を描きます';
    }

    public function cut(Cuttable $cuttable): string
    {
        return $cuttable->create() . 'を切ります';
    }

    public function print(Cuttable $cuttable): string
    {
        return $cuttable->create() . 'を印刷します';
    }
}
