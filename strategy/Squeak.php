<?php

require_once('./IQuackBehavior.php');

class Squeak implements IQuackBehavior
{
    public function quack(): string
    {
        return "Squeak squeak";
    }
}
