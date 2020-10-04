<?php

require_once('./observer/Monitor.php');
require_once('./strategy/DuckSimulator.php');
require_once('./decorator/Counter.php');

function run($program)
{
    switch ($program) {
        case 'strategy':
            echo "Running strategy example</br></br>";
            $duckSimulator = new DuckSimulator();
            $duckSimulator->execute();
            echo "</br>";
        break;
        case 'observer':
            echo "Running observer example</br></br>";
            $monitor = new Monitor();
            $monitor->execute();
            echo "</br>";
        case 'decorator':
            echo "Running decorator example</br></br>";
            $counter = new Counter();
            $counter->execute();
            echo "</br>";
    }
}

run('decorator');
