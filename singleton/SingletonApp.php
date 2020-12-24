<?php

require_once(__DIR__ . '/Logger.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class SingletongApp implements ApplicationInterface
{
    public function execute(): void
    {
        $logger = Logger::getInstance();
        $logger->write('Hello world!');
        $logger->write('This is from inside the logger');
        $logger->write('End example');
    }
}
