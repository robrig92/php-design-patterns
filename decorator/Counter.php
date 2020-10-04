<?php

require_once(__DIR__ . '/IVA.php');
require_once(__DIR__ . '/ISR.php');
require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/ConcreteProduct.php');

class Counter
{
    public function execute()
    {
        $tv = $this->productFactory('tv');
        $playstation = $this->productFactory('playstation 4');
        $xbox = $this->productFactory('xbox one');

        renderln("Products and stock prices");
        renderln($tv->getPrice());

        renderln();
        renderln("Total in stock with 2 as quantity");
        renderln($tv->total(2));

        renderln();
        renderln("Total with taxes");
        $tv = $this->addTax('iva', $tv);
        renderln($tv->total(2));
        $tv = $this->addTax('isr', $tv);

        renderln('');
        renderln($tv->total(2));
    }

    private function addTax(string $type, Product $wrappee)
    {
        switch ($type)
        {
            case 'iva':
                return new IVA($wrappee);
            // No break
            case 'isr':
                return new ISR($wrappee);
            // No break
            default:
                throw new Exception('Unknown option');
        }
    }

    private function productFactory(string $type): ConcreteProduct
    {
        switch ($type)
        {
            case 'tv':
                return new ConcreteProduct('TV', 5999, 25);
            // No break
            case 'playstation 4':
                return new ConcreteProduct('Playstation 4', 8999, 10);
            // No break
            case 'xbox one':
                return new ConcreteProduct('Xbox One', 7999, 15);
            // No break
            default:
                throw new Exception('Unknown option');
        }
    }
}
