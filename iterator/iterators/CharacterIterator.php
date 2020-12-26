<?php

require_once(__DIR__ . '/IteratorInterface.php');

class CharacterIterator implements IteratorInterface
{
    protected $elements;
    protected $currentPosition;

    public function __construct(array $elements)
    {
        $this->currentPosition = 0;
        $this->elements = $elements;
    }

    public function hasNext(): bool
    {
        return $this->currentPosition + 1 >= count($this->elements);
    }

    public function next()
    {
        return $this->elements[++$this->currentPosition];
    }
}
