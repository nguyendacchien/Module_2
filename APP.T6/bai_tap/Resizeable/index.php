<?php
include "Circle.php";
include "Rectangle.php";
include "Spuare.php";

$circle = new Circle('circle',5);
$rectangle= new Rectangle('rectangle',5,6);
$spuare = new Spuare('square',5,5);
echo $rectangle->getName()."<br>"."Area ban đầu: ".$rectangle->calculateArea()."<br>"."Area sau khi thay đổi: ".$rectangle->resize(100)."<br>";
echo $spuare->getName()."<br>"."Area ban đầu: ".$rectangle->calculateArea()."<br>"."Area sau khi thay đổi: ".$rectangle->resize(150)."<br>";
echo $circle->getName()."<br> Area ban đầu: ".$circle->calculateArea()."<br> sau khi thay đổi: ".$circle->resize(50);