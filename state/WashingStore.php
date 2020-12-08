<?php

require_once(__DIR__ . '/Washer.php');

class WashingStore
{
    public function execute()
    {
        $washer = new Washer();
        $washer->fill();
        $washer->dropWater();
        $washer->fill();
        $washer->dropWater();
    }
}
