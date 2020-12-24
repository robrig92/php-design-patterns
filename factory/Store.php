<?php

require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/MexicanToyFactory.php');
require_once(__DIR__ . '/ItalianToyFactory.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class Store implements ApplicationInterface
{
    public function execute(): void
    {
        $mexicanFactory = new MexicanToyFactory();
        $italianFactory = new ItalianToyFactory();

        $toyBuilded = $mexicanFactory->craft('wrestler');
        renderln($toyBuilded);

        $italianToy = $italianFactory->craft('pizzero');
        renderln($italianToy);
    }
}
