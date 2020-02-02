<?php
require_once 'CalcTax.php';

class UsTax implements CalcTax
{
    public function taxAmount(int $amount, int $price, string $kind): int
    {
        return $this->getTaxRate($amount, $price);
    }

    private function getTaxRate(int $amount, int $price): int
    {
        if ($amount * $price > 1000) {
            return 5;
        } else {
            return 7;
        }
    }
}
