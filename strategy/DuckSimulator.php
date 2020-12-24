<?php

require_once(__DIR__ . '/ModelDuck.php');
require_once(__DIR__ . '/FlyWithRocket.php');
require_once(__DIR__ . '/MallardDuck.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class DuckSimulator implements ApplicationInterface
{
    public function execute(): void
    {
        echo "Starting the simulator</br>";

        $mallard = $this->duckFactory('mallard');
        $mallard->display();
        $mallard->performQuack();
        $mallard->performFly();

        $modelDuck = $this->duckFactory('model');
        $modelDuck->display();
        $modelDuck->performQuack();
        $modelDuck->performFly();

        $modelDuck->setFlyBehavior(new FlyWIthRocket());
        $modelDuck->performFly();

        echo "Ending the simulator</br>";
    }

    protected function duckFactory($type)
    {
        switch ($type) {
            case 'mallard':
                return new MallardDuck();
                // No break
            case 'model':
                return new ModelDuck();
                //No break;
            default:
                throw new Exception('Invalid duck type');
        }
    }
}
