<?php
require_once 'CalcTax.php';

class CanTax implements CalcTax
{
    public function taxAmount(int $amount, int $price, string $kind): int
    {
        return $this->getTaxRate($amount, $price, $kind);
    }

    private function getTaxRate(int $amount, int $price, string $kind): int
    {
        // 1500円以上だったら無条件に15%となる
        if ($amount * $price > 1500) {
            return 15;
        }

        // それ以下の場合は、品目ごとに異なる
        switch ($kind) {
            case '食料品' :
                return 15;
            case '日用品' :
                return 13;
            default :
                return 10;
        }
    }
}
