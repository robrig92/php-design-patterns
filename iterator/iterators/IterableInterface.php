<?php

require_once(__DIR__ . '/IteratorInterface.php');

interface IterableInterface
{
    public function createIterator(): IteratorInterface;
}
