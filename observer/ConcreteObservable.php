<?php

require_once(__DIR__ . '/Observable.php');

class ConcreteObservable implements Observable
{
    protected $value = 0;
    protected $observers = [];

    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, function ($current) use ($observer) {
            return $current !== $observer;
        });
    }

    public function notifyObservers(): void
    {
        foreach($this->observers as $observer) {
            $observer->update();
        }
    }

    public function getState(): int
    {
        return $this->value;
    }

    public function setState(int $value): void
    {
        $this->value = $value;
        $this->notifyObservers();
    }
}
