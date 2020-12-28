<?php

class Restaurant
{
    protected $name;
    protected $sector;
    protected $address;

    public function __construct($name, $address, $sector)
    {
        $this->name = $name;
        $this->sector = $sector;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSector()
    {
        return $this->sector;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function changeSector($sector)
    {
        $this->sector = $sector;
    }

    public function __toString()
    {
        return "[{$this->sector}] {$this->name} - {$this->address}";
    }
}
