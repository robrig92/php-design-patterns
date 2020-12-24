<?php

require_once(__DIR__ . '/ConcreteObserver.php');
require_once(__DIR__ . '/ConcreteObservable.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class Monitor implements ApplicationInterface
{
    public function execute(): void
    {
        $this->println("Creating Observer");
        $observable = new ConcreteObservable();

        $this->println("");
        $this->println("Creating Observer A and registering to Observable");
        $observerA = new ConcreteObserver('Observer A', $observable);

        $this->println("");
        $this->println("Creating Observer B and registering to Observable");
        $observerB = new ConcreteObserver('Observer B', $observable);

        $this->println("");
        $observable->setState(1);
        $observable->setState(2);

        $this->println("");
        $this->println("Removing Observer B");
        $observable->removeObserver($observerB);

        $this->println("");
        $observable->setState(10);

        $this->println("");
        $this->println("Removing Observer A");
        $observable->removeObserver($observerA);

        $this->println("");
        $this->println("Setting the state to 1 (No more observers left)");
        $observable->setState(1);

        $this->println("");
        $this->println("Registering ObserverB");
        $observable->registerObserver($observerB);

        $this->println("");
        $observable->setState(100);
    }

    public function println($message)
    {
        echo $message . "</br>";
    }
}
