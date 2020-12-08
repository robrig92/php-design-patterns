<?php

require_once(__DIR__ . '/StateInterface.php');
require_once(__DIR__ . ' /../../utils/Output.php');

class EmptyState implements StateInterface
{
    private $washer;

    public function __construct($washer)
    {
        $this->washer = $washer;
    }

    public function fill()
    {
        renderln("Filling the washer with water");
        $this->washer->setState($this->washer->getWashState());
    }

    public function dropWater()
    {
        throw new BadMethodCallException("Operation invalid");
    }

    public function stop()
    {
        renderln("Stopped the washer");
        $this->washer->setState($this->washer->getEmptyState());
    }
}
