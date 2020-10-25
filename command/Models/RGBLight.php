<?php

require_once(__DIR__ . '/../../utils/Output.php');

class RGBLight
{
    protected $color;

    public function __construct()
    {
        $this->color = 'white';
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function on(): void
    {
        renderln("RGB light now is on");
        renderln("Color: {$this->color}");
    }

    public function off(): void
    {
        renderln("RGB light is off");
    }
}
