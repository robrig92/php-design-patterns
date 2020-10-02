<?php

require_once(__DIR__ . '/IFlyBehavior.php');

class FlyWIthRocket implements IFlyBehavior
{
    public function fly(): string
    {
        return "Flying with a rocket!!";
    }
}
