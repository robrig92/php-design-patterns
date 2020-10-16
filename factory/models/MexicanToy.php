
<?php

require_once(__DIR__ . '/Toy.php');

class MexicanToy extends Toy
{
    public function __construct(string $name = 'Mexican toy', float $price = 27.5, array $parts = [])
    {
        $this->name = $name;
        $this->proce = $price;
        $this->parts = empty($parts) ? $this->getDefaultParts() : $parts;
    }
}
