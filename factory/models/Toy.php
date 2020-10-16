<?php

abstract class Toy
{
    protected $name;
    protected $price;
    protected $parts;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    public function setParts(array $parts): void
    {
        $this->parts = $parts;
    }

    public function getParts(): array
    {
        return $this->parts;
    }

    public function getDefaultParts(): array
    {
        return [
            'head',
            'body',
            'right leg',
            'left leg',
            'right arm',
            'left arm',
        ];
    }
}
