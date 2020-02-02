<?php
require_once 'CalcTax.php';

class SalesOrder
{
    private $calcTax;
    private $taxRate;
    private $tax;

    public function __construct(CalcTax $calcTax)
    {
        $this->calcTax = $calcTax;
    }

    public function handle(int $amount, int $price, string $kind): int
    {
        $this->taxRate = $this->calcTax->taxAmount($amount, $price, $kind); // 税率を取得する
        $this->tax = $this->getTax($this->taxRate); // 計算上の税率を設定する
        return (int)($amount * $price * $this->tax); // トータルの金額を返却する
    }

    private function getTax(int $taxRate): float
    {
        return ($taxRate + 100) / 100;
    }
}
