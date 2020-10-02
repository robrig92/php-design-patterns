<?php

include_once(__DIR__ . '/Observable.php');

interface Observable
{
    public function registerObserver(Observer $observer): void;
    public function removeObserver(Observer $observer): void;
    public function notifyObservers(): void;
}
