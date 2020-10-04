<?php

require_once(__DIR__ . '/Product.php');

class ConcreteProduct extends Product
{
    public function __construct(string $name, float $price, int $stock, string $description = "")
    {
        $this->name = $name;
        $this->stock = $stock;
        $this->price = $price;
        $this->description = $description;
    }

    public function total(int $quantity): float
    {
        return $this->price * $quantity;
    }
}
