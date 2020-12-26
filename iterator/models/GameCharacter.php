<?php

class GameCharacter
{
    protected $name;
    protected $level;
    protected $class;

    public function __construct(string $name, int $level, string $class)
    {
        $this->name = $name;
        $this->level = $level;
        $this->class = $class;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }
}
