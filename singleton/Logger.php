<?php

require_once(__DIR__ . '/../utils/Output.php');

class Logger {
    private static $instance;

    private function __constructor() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function write(string $message)
    {
        renderln($message);
    }
}