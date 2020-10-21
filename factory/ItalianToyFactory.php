<?php

require_once(__DIR__ . './models/Toy.php');
require_once(__DIR__ . './models/ItalianToy.php');
require_once(__DIR__ . './ToyFactory.php');

class ItalianToyFactory extends ToyFactory
{
    public function getToy(string $type): Toy
    {
        switch ($type) {
            case 'pizzero':
                return new ItalianToy('Pizzero', 10.05, [
                    'head',
                    'body',
                    'right arm',
                    'left arm',
                    'right leg',
                    'left leg',
                    'pizza',
                    'apron'
                ]);
                break;
            case 'italian':
                return new ItalianToy();
                break;
            default:
                throw new Exception('Invalid option');
                // No break
        }
    }
}