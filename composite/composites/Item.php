<?php

require_once(__DIR__ . '/Component.php');
require_once(__DIR__ . '/../../utils/Output.php');

class Item implements Component
{
    protected $component;

    public function __construct($component)
    {
        $this->component = $component;
    }

    public function add($compoment)
    {
        throw new Exception("Not supported");
    }

    public function remove($position)
    {
        throw new Exception("Not supported");
    }

    public function getChild($position)
    {
        throw new Exception("Not supported");
    }

    public function getLocation()
    {
        renderln($this->component);
    }
}
