<?php

require_once(__DIR__ . '/Observer.php');

class ConcreteObserver implements Observer
{
    protected $name = '';
    protected $observable = null;

    public function __construct(string $name, ConcreteObservable $observable)
    {
        $this->name = $name;
        $this->observable = $observable;
        $this->observable->registerObserver($this);
    }

    public function update(): void
    {
        echo $this->name . ': the new value is ' . $this->observable->getState() . '</br>';
    }
}
