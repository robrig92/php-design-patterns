<?php

require_once(__DIR__ . '/models/Toy.php');
require_once(__DIR__ . '/ToyFactory.php');
require_once(__DIR__ . '/models/MexicanToy.php');

class MexicanToyFactory extends ToyFactory
{
    public function getToy($type): Toy
    {
        switch ($type) {
            case 'wrestler':
                return new MexicanToy('Luchador', 56);
                // No break
            default:
                throw new Exception("Unknown option");
                // No break
        }
    }
}