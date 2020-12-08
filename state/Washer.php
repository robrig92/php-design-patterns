<?php

require_once(__DIR__ . '/states/RinseState.php');
require_once(__DIR__ . '/states/WashedState.php');
require_once(__DIR__ . '/states/EmptyState.php');
require_once(__DIR__ . '/states/WashState.php');

class Washer
{
    private $washState;
    private $emptyState;
    private $rinseState;
    private $washedState;
    private $currentState;

    public function __construct()
    {
        $this->washState = new WashState($this);
        $this->emptyState = new EmptyState($this);
        $this->rinseState = new RinseState($this);
        $this->washedState = new WashedState($this);

        $this->currentState = $this->emptyState;
    }

    public function setState($state)
    {
        $this->currentState = $state;
    }

    public function fill()
    {
        $this->currentState->fill();
    }

    public function stop()
    {
        $this->currentState->stop();
    }

    public function dropWater()
    {
        $this->currentState->dropWater();
    }

    public function getWashState()
    {
        return $this->washState;
    }

    public function getEmptyState()
    {
        return $this->emptyState;
    }

    public function getWashedState()
    {
        return $this->washedState;
    }

    public function getRinseState()
    {
        return $this->rinseState;
    }
}
