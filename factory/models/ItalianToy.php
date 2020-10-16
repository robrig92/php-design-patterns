<?php

require_once(__DIR__ . '/Toy.php');

class ItalianToy extends Toy
{
    public function __construct(string $name = 'Italian toy', float $price = 17.5, array $parts = [])
    {
        $this->name = $name;
        $this->proce = $price;
        $this->parts = empty($parts) ? $this->getDefaultParts() : $parts;
    }
}
