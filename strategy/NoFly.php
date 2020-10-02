<?php

require_once(__DIR__ . '/IFlyBehavior.php');

class NoFly implements IFlyBehavior
{
    public function fly(): string
    {
        return "I am not flying";
    }
}
