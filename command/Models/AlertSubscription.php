<?php

require_once(__DIR__ . '/../../utils/Output.php');

class AlertSubscription
{
    public function on(): void
    {
        renderln("Alert ringing!");
    }

    public function off(): void
    {
        renderln("Alert stopped");
    }
}
