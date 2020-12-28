<?php

interface Component
{
    public function getLocation();
    public function add($component);
    public function remove($position);
    public function getChild($position);
}
