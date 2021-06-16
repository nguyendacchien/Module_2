<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point= new Point(5,4);
//echo $point;
$movePoint= new MoveablePoint(5,6,3,3);
echo $movePoint."<br>";
//echo $movePoint->move();
