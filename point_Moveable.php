<?php
include_once "Point.php";
include_once "MoveablePoint.php";
$point=new Point(30,40);

$point->toString();
//echo $point->getXY() ;
echo "<br>";
$moveablePoint=new MoveablePoint(10,20,40,30);

$moveablePoint->toString();
?>