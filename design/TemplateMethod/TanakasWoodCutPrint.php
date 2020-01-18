<?php
require_once 'WoodCutPrint.php';

class TanakasWoodCutPrint extends WoodCutPrint
{
    public function draw(Hanzai $hanzai): string
    {
        return $hanzai->create() . 'を描きます';
    }

    public function cut(Hanzai $hanzai): string
    {
        return $hanzai->create() . 'を切ります';
    }

    public function print(Hanzai $hanzai): string
    {
        return $hanzai->create() . 'を印刷します';
    }
}
