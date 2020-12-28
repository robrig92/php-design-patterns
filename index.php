<?php

require_once('./utils/Output.php');
require_once('./iterator/Game.php');
require_once('./factory/Store.php');
require_once('./command/Stream.php');
require_once('./adapter/CDPlayer.php');
require_once('./observer/Monitor.php');
require_once('./decorator/Counter.php');
require_once('./state/WashingStore.php');
require_once('./ApplicationInterface.php');
require_once('./composite/BrandManager.php');
require_once('./strategy/DuckSimulator.php');
require_once('./singleton/SingletonApp.php');

function getApplication($program): ApplicationInterface
{
    switch ($program) {
        case 'strategy':
            return new DuckSimulator();
            // No break
        case 'observer':
            return new Monitor();
            // No break
        case 'decorator':
            return new Counter();
            // No break
        case 'factory':
            return new Store();
            // No break
        case 'singleton':
            return new SingletongApp();
            // No break
        case 'command':
            return new Stream();
            // No break
        case 'adapter':
            return new CDPlayer();
            // No break
        case 'state':
            return new WashingStore();
            // No break
        case 'iterator':
            return new Game();
            // No break
        case 'composite':
            return new BrandManager();
    }
}

$program = 'composite';
$application = getApplication($program);
renderln("Running the $program example</br>");
$application->execute();
