<?php

require_once(__DIR__ . '/NoFly.php');
require_once(__DIR__ . '/NoQuack.php');

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new NoFly();
        $this->quackBehavior = new NoQuack();
    }

    public function display(): void
    {
        echo "This is a model duck!</br>";
    }
}
