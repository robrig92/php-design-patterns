<?php

require_once(__DIR__ . '/StateInterface.php');
require_once(__DIR__ . ' /../../utils/Output.php');

class WashState implements StateInterface
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
        renderln("Dropping the water");
        $this->washer->setState($this->washer->getWashedState());
    }

    public function stop()
    {
        throw new BadMethodCallException("Operation invalid");
        renderln("Stopped the washer");
        $this->washer->setState($this->washer->getEmptyState());
    }
}
