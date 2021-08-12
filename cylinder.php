<?php
include_once ("circle.php");

class cylinder extends circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent:: __construct($radius, $color);
        $this->height = $height;
        
    }
    public function calculateArea()
    {
        return parent::calculateArea() * $this->height;
    }
    public function __toString()
    {
        return "Height: $this->height" . parent:: __toString();
        
    }
}