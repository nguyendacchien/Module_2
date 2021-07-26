<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public int $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }

}