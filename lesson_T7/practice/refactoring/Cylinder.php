<?php


class Cylinder
{
//    public int $radius;
//    public int $height;
//
//
//    public function __construct(int $radius, int $height)
//    {
//        $this->radius = $radius;
//        $this->height = $height;
//    }
    public function getVolume($radius, $height): int
    {
        $perimeter = $this->getBaseArea($radius);
        $baseArea = $this->getPerimeter($radius);
        return $perimeter * $height + (2 * $baseArea);
    }


    public function getPerimeter($radius): int
    {
        return pi() * $radius * $radius;
    }

    public function getBaseArea($radius): int
    {
        return 2 * pi() * $radius;
    }
}