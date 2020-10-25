<?php

require_once(__DIR__ . '/Logger.php');

class SingletongApp
{
    public function execute()
    {
        $logger = Logger::getInstance();
        $logger->write('Hello world!');
        $logger->write('This is from inside the logger');
        $logger->write('End example');
    }
}