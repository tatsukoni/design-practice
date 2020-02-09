<?php
require_once 'CalcTax.php';
require_once 'JaTax.php';
require_once 'UsTax.php';
require_once 'CanTax.php';
require_once 'UndefinedTax.php';
require_once 'SalesOrder.php';

class TaskController
{
    private $salesOrder;

    public function __construct(string $myCountry)
    {
        $this->salesOrder = new SalesOrder($this->getTaxRulesForCountry($myCountry));
    }

    public function getTotalPrice(int $amount, int $price, string $kind): string
    {
        $totalPrice = $this->salesOrder->handle($amount, $price, $kind);

        if ($this->salesOrder->getCalcTax() instanceof UndefinedTax) {
            return '税率対象外国家です。合計金額：' . $totalPrice;
        } else {
            return '合計金額：' . $totalPrice;
        }
    }

    private function getTaxRulesForCountry(string $myCountry): CalcTax
    {
        switch ($myCountry) {
            case 'ja' :
                return new JaTax();
            case 'us' :
                return new UsTax();
            case 'can' :
                return new CanTax();
            default :
                return new UndefinedTax();
        }
    }
}
