<?php

require_once(__DIR__ . '/Washer.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class WashingStore implements ApplicationInterface
{
    public function execute(): void
    {
        $washer = new Washer();
        $washer->fill();
        $washer->dropWater();
        $washer->fill();
        $washer->dropWater();
    }
}
