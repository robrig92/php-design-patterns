<?php

require_once(__DIR__ . '/Component.php');

class Sector implements Component
{
    protected $components;

    public function __construct($components = [])
    {
        $this->components = $components;
    }

    public function add($component)
    {
        $this->components[] = $component;
    }

    public function remove($position)
    {
        unset($this->components[$position]);
    }

    public function getLocation()
    {
        foreach ($this->components as $k => $component) {
            $component->getLocation();
        }
    }

    public function getChild($position)
    {

    }
}
