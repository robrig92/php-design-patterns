<?php

require_once('./utils/Output.php');
require_once('./factory/Store.php');
require_once('./command/Stream.php');
require_once('./adapter/CDPlayer.php');
require_once('./observer/Monitor.php');
require_once('./decorator/Counter.php');
require_once('./state/WashingStore.php');
require_once('./ApplicationInterface.php');
require_once('./strategy/DuckSimulator.php');
require_once('./singleton/SingletonApp.php');

function getApplication($program): ApplicationInterface
{
    switch ($program) {
        case 'strategy':
            renderln("Running strategu example</br>");
            return new DuckSimulator();
            // No break
        case 'observer':
            renderln("Running observer example</br>");
            return new Monitor();
            // No break
        case 'decorator':
            renderln("Running decorator example</br>");
            return new Counter();
            // No break
        case 'factory':
            renderln("Running factory example</br>");
            return new Store();
            // No break
        case 'singleton':
            renderln('Running singleton</br>');
            return new SingletongApp();
            // No break
        case 'command':
            renderln("Running command</br>");
            return new Stream();
            // No break
        case 'adapter':
            renderln("Running adapter</br>");
            return new CDPlayer();
            // No break
        case 'state':
            renderln("Running state</br>");
            return new WashingStore();
            // No break
    }
}

$application = getApplication('state');
$application->execute();
