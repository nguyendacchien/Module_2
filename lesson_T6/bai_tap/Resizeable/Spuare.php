<?php
include_once "Rectangle.php";

class Spuare extends Rectangle
{
    public function __construct(string $name, int $width, int $height)
    {
        parent::__construct($name, $width, $height);
    }

}