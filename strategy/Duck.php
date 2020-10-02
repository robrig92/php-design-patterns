<?php

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public abstract function display(): void;

    public function setFlyBehavior(IFlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(IQuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performFly(): void
    {
        echo $this->flyBehavior->fly() . "</br>";
    }

    public function performQuack(): void
    {
        echo $this->quackBehavior->quack() . "</br>";
    }

    public function swim(): void
    {
        echo "All ducks float!</br>";
    }
}
