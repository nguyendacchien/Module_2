<?php
include_once "Rectangle.php";
$width = 20;
$height = 10;
$rectangle = new Rectangle($width, $height);
echo $rectangle->height . '<br>';
echo $rectangle->width . "<br>";
//$rectangle->height=30;
//$rectangle->width=50;
//echo $rectangle->height.'<br>';
//echo $rectangle->width.'<br>';
echo $rectangle->getPerimeter() . '<br>';
echo $rectangle->getArea() . '<br>';
echo("your Rectangle" . $rectangle->display());