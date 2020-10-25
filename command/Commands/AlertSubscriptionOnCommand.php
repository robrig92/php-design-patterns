<?php

require_once(__DIR__ . '/Command.php');
require_once(__DIR__ . '/../../Models/AlertSubscription.php');

class AlertSubscriptionOnCommand implements Command
{
    protected $alertSubscription;

    public function __construct(AlertSubscription $alertSubscription)
    {
        $this->alertSubscription = $alertSubscription;
    }

    public function execute(): void
    {
        $this->alertSubscription->on();
    }
}
