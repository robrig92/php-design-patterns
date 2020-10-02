<?php

require_once(__DIR__ . '/IQuackBehavior.php');

class NoQuack implements IQuackBehavior
{
    public function quack(): string
    {
        return "**Muted**";
    }
}

