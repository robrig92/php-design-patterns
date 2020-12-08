<?php

require_once('./utils/Output.php');
require_once('./factory/Store.php');
require_once('./command/Stream.php');
require_once('./adapter/CDPlayer.php');
require_once('./observer/Monitor.php');
require_once('./decorator/Counter.php');
require_once('./state/WashingStore.php');
require_once('./strategy/DuckSimulator.php');
require_once('./singleton/SingletonApp.php');

function run($program)
{
    switch ($program) {
        case 'strategy':
            renderln("Running strategu example</br>");
            $duckSimulator = new DuckSimulator();
            $duckSimulator->execute();
            renderln();
            break;
        case 'observer':
            renderln("Running observer example</br>");
            $monitor = new Monitor();
            $monitor->execute();
            renderln();
            break;
        case 'decorator':
            renderln("Running decorator example</br>");
            $counter = new Counter();
            $counter->execute();
            renderln();
            break;
        case 'factory':
            renderln("Running factory example</br>");
            $counter = new Store();
            $counter->execute();
            renderln();
            break;
        case 'singleton':
            renderln('Running singleton</br>');
            $loggerApp = new SingletongApp();
            $loggerApp->execute();
            renderln();
            break;
        case 'command':
            renderln("Running command</br>");
            $commandApp = new Stream();
            $commandApp->execute();
            break;
        case 'adapter':
            renderln("Running adapter</br>");
            $adapterApp = new CDPlayer();
            $adapterApp->execute();
            break;
        case 'state':
            renderln("Running state</br>");
            $stateApp = new WashingStore();
            $stateApp->execute();
            break;
    }
}

run('state');
