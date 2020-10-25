<?php

require_once(__DIR__ . '/Command.php');
require_once(__DIR__ . '/../../Models/MusicPlayer.php');

class MusicPlayerOffController implements Command
{
    protected $musicPlayer;

    public function __construct(MusicPlayer $musicPlayer)
    {
        $this->musicPlayer = $musicPlayer;
    }

    public function execute(): void
    {
        $this->musicPlayer->stop();
    }
}
