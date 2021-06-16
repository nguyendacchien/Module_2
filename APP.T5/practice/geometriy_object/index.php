<?php
include_once "shape.php";

$circle = new Circle('circle 01', 3);
echo "circle area: " . $circle->calculateArea() . '<br>';
echo "circle perimeter: " . $circle->calculatePerimeter() . '<br>';

$cylinder = new Cylinder('cylinder 01', 3, 4);
echo 'cylinder area: ' . $circle->calculateArea() . '<br>';
echo 'cylinder perimeter: ' . $circle->calculatePerimeter() . '<br>';

$rectangle = new  Rectangles('rectangle 01', 3, 4);
echo 'rectangle area: ' . $rectangle->calculateArea() . '<br>';
echo 'rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br>';

$square = new Square('square 01', 4);
echo 'square area: ' . $square->calculateArea() . '<br>';
echo 'square perimeter: ' . $square->calculatePerimeter() . '<br>';