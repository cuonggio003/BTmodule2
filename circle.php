<?php
class circle
{
    public $radius;
    public $color;
    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea()
    {
        return pi() *pow($this->radius, 2);

    }
    public function __toString()
    {
        return ("Radius: " . $this->radius. "Color : " . $this->color . "<br>");
    }
}