<?php

require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/MexicanToyFactory.php');

class Store
{
    public function execute()
    {
        $mexicanFactory = new MexicanToyFactory();

        $toyBuilded = $mexicanFactory->craft('wrestler');
        renderln($toyBuilded);
    }
}