<?php

require_once(__DIR__ . '/../../utils/Output.php');

class MusicPlayer
{
    protected $volume;

    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function play(): void
    {
        renderln("Playing music");
    }

    public function stop(): void
    {
        renderln("Stopped playing music");
    }
}
