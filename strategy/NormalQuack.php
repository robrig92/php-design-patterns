<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/strategy/IQuackBehavior.php');

class NormalQuack implements IQuackBehavior
{
    public function quack(): string
    {
        return "Quack quack!!";
    }
}
