<?php

require_once('./utils/Output.php');
require_once('./observer/Monitor.php');
require_once('./strategy/DuckSimulator.php');
require_once('./decorator/Counter.php');

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
        case 'decorator':
            renderln("Running decorator example</br>");
            $counter = new Counter();
            $counter->execute();
            renderln();
    }
}

run('decorator');
