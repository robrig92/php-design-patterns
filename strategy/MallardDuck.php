<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/strategy/Duck.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/strategy/NormalFly.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/strategy/NormalQuack.php');

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new NormalFly();
        $this->quackBehavior = new NormalQuack();
    }

    public function display(): void
    {
        echo "I am a mallard duck!!</br>";
    }
}
