<?php

class Circle
{
    public $radius;
    public $name;

    public function __construct($name, $radius)
    {
        $this->$radius;
        $this->$name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRadius()
    {
        $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}