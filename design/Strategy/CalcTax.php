<?php

interface CalcTax 
{
    function taxAmount(int $amount, int $price, string $kind): int;
}
