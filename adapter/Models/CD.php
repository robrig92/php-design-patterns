<?php

require_once(__DIR__ . '/../../utils/Output.php');

class CD
{
    private $name;
    private $duration;
    private $songs;

    public function __construct(string $name, string $duration, array $songs)
    {
        $this->name = $name;
        $this->songs = $songs;
        $this->duration = $duration;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getSongs()
    {
        return $this->songs;
    }

    public function play(int $number)
    {
        renderln("Playing {$this->songs[$number]}");
    }
}
