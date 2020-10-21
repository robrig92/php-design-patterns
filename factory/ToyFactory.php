<?php

require_once(__DIR__ . '/models/Toy.php');

abstract class ToyFactory
{
    public function craft(string $type): string
    {
        $this->toy = $this->getToy($type);
        $parts = $this->toy->getParts();
        return $this->assembly($parts);
    }

    public function assembly($parts): string
    {
        return array_reduce($parts, function ($assembled, $part) {
            return "$assembled $part,";
        }, '');
    }

    public abstract function getToy(string $type): Toy;
}
