<?php

require_once(__DIR__ . '/../Models/CD.php');

class DVDAdapter extends CD
{
    private $dvd;

    public function __construct($dvd)
    {
        $this->dvd = $dvd;
    }

    public function getName()
    {
        return $this->dvd->getLabel();
    }

    public function getDuration()
    {
        return $this->dvd->getLength();
    }

    public function getSongs()
    {
        return $this->dvd->getTracks()->toArray();
    }

    public function play(int $number)
    {
        $this->dvd->reproduce($number);
    }

    public function __toString()
    {
        return $this->dvd->toString();
    }
}