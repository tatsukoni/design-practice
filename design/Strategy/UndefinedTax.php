<?php
require_once 'CalcTax.php';

class UndefinedTax implements CalcTax
{
    const UNDEFINED_TAX_RATE = 1;

    public function taxAmount(int $amount, int $price, string $kind): int
    {
        return self::UNDEFINED_TAX_RATE;
    }
}