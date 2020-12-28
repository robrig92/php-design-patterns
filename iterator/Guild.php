<?php

require_once(__DIR__ . '/iterators/GuildIterator.php');
require_once(__DIR__ . '/iterators/IteratorInterface.php');
require_once(__DIR__ . '/iterators/IterableInterface.php');

class Guild implements IterableInterface
{
    protected $name;
    protected $members;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->members = [];
    }

    public function getName()
    {
        return $this->name;
    }

    public function addMember($character)
    {
        $this->members[] = $character;
    }

    public function removeMember($position)
    {
        unset($this->members[$position]);
    }

    public function createIterator(): IteratorInterface
    {
        return new GuildIterator($this->members);
    }
}
