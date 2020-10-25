<?php

require_once(__DIR__ . '/Command.php');
require_once(__DIR__ . '/../Models/MusicPlayer.php');

class MusicPlayerOnController implements Command
{
    protected $musicPlayer;

    public function __construct(MusicPlayer $musicPlayer)
    {
        $this->musicPlayer = $musicPlayer;
    }

    public function execute(): void
    {
        $this->musicPlayer->setVolume(10);
        $this->musicPlayer->play();
    }
}
