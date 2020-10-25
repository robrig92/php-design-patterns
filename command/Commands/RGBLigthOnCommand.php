<?php

require_once(__DIR__ . '/Command.php');
require_once(__DIR__ . '/../../Models/RGBLight.php');

class RGBLightOnCommand implements Command
{
    protected $light;

    public function __construct(RGBLight $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->setColor('RGB');
        $this->light->on();
    }
}
