<?php
include_once ('circle.php');
include_once ('cylinder.php');

$circle = new Circle(5, 'red');
echo $circle->__toString();
echo 'Circle area: ' . $circle->calculateArea(). '<br>';

$cylinder = new Cylinder(7, "green", 10);
echo $cylinder->__toString();
echo'Cylinder area: ' . $cylinder->calculateArea(). '<br>';