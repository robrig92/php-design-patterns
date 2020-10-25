<?php

require_once(__DIR__ . '/Command.php');

class NoCommand implements Command
{
    public function execute() : void {}
}
