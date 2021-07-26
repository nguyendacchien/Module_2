<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle=new Circle(4,'red');
$cylinder=new Cylinder(5,'green',3);
echo "radius: ".$cylinder->getRadius()."<br>"." color: ".$cylinder->getColor()."<br>";
echo "thể tích: ".$cylinder->calculateVolume()."<br>"."diện tích đáy: ".$cylinder->calculateArea();
