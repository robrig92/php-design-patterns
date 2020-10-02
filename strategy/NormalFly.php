<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/strategy/IFlyBehavior.php');

class NormalFly implements IFlyBehavior
{
    public function fly(): string
    {
        return "I am flying normally";
    }
}
