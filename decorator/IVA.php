<?php

require_once(__DIR__ . '/TaxDecorator.php');

class IVA extends TaxDecorator
{
    public function total(int $quantity): float
    {
        return $this->wrapped->total($quantity) * 1.16;
    }
}
