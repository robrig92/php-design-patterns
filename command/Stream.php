<?php

require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/Models/RGBLight.php');
require_once(__DIR__ . '/Models/MusicPlayer.php');
require_once(__DIR__ . '/StreamingController.php');
require_once(__DIR__ . '/../ApplicationInterface.php');
require_once(__DIR__ . '/Models/AlertSubscription.php');
require_once(__DIR__ . '/Commands/RGBLigthOnCommand.php');
require_once(__DIR__ . '/Commands/RGBLightOffCommand.php');
require_once(__DIR__ . '/Commands/MusicPlayerOnCommand.php');
require_once(__DIR__ . '/Commands/MusicPlayerOffCommand.php');
require_once(__DIR__ . '/Commands/AlertSubscriptionOnCommand.php');
require_once(__DIR__ . '/Commands/AlertSubscriptionOffCommand.php');

class Stream implements ApplicationInterface
{
    public function execute(): void
    {
        $light = new RGBLight();
        $player = new MusicPlayer();
        $alert = new AlertSubscription();

        $lightOnCommand = new RGBLightOnCommand($light);
        $lightOffCommand = new RGBLightOffCommand($light);
        $playerOnCommand = new MusicPlayerOnController($player);
        $playerOffCommand = new MusicPlayerOffController($player);
        $alertOnCommand = new AlertSubscriptionOnCommand($alert);
        $alertOffCommand = new AlertSubscriptionOffCommand($alert);

        $controller = new StreamingController();

        $controller->setCommand(0, $lightOnCommand, $lightOffCommand);
        $controller->setCommand(1, $playerOnCommand, $playerOffCommand);
        $controller->setCommand(2, $alertOnCommand, $alertOffCommand);

        $controller->buttonOnPressed(0);
        $controller->buttonOnPressed(1);

        $controller->buttonOffPressed(1);

        renderln();
        renderln("End command example");
    }
}
