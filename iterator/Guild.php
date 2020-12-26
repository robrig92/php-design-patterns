<?php

require_once(__DIR__ . '/iterators/GuildIterator.php');

class Guild
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

    public function createIterator()
    {
        return new GuildIterator($this->members);
    }
}
