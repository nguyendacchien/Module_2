<?php
include_once "Point2d.php";
include_once "Point3d.php";

$point2d = new Point2d(4,5);
//echo $point2d."<br>";
$point3d= new Point3d(6,7,8);
echo implode($point3d->getXYZ())."<br>";
echo $point3d;