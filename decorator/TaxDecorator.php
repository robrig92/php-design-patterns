<?php

require_once(__DIR__ . '/Product.php');

abstract class TaxDecorator extends Product
{
    protected $wrapped = null;

    public function __construct(Product $product)
    {
        $this->wrapped = $product;
    }

    public abstract function total(int $quantity): float;
}
