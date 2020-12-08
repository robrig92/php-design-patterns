<?php

require_once(__DIR__ . '/StateInterface.php');
require_once(__DIR__ . ' /../../utils/Output.php');

class RinseState implements StateInterface
{
    private $washer;

    public function __construct($washer)
    {
        $this->washer = $washer;
    }

    public function fill()
    {
        throw new BadMethodCallException("Operation invalid");
    }

    public function dropWater()
    {
        renderln("Dropping the water prepare to empty the washer, have fun c:");
        $this->washer->setState($this->washer->getEmptyState());
    }

    public function stop()
    {
        throw new BadMethodCallException("Operation invalid");
    }
}
