<?php
require_once 'CalcTax.php';

class JaTax implements CalcTax
{
    public function taxAmount(int $amount, int $price, string $kind): int
    {
        return $this->getTaxRate($kind);
    }

    private function getTaxRate(string $kind): int
    {
        switch ($kind) {
            case '食料品' :
                return 8;
            case '日用品' :
                return 9;
            default :
                return 10;
        }
    }
}