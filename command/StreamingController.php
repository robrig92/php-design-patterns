<?php

require_once(__DIR__ . '/Commands/Command.php');
require_once(__DIR__ . '/Commands/NoCommand.php');

class StreamingController
{
    protected $onCommands;
    protected $offCommands;

    public function __construct()
    {
        $this->onCommands = [];
        $this->offCommands = [];

        for ($i = 0; $i < 5; $i++) {
            $this->onCommands[] = new NoCommand();
            $this->offCommands[] = new NoCommand();
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function buttonOnPressed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
    }

    public function buttonOffPressed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
    }
}
