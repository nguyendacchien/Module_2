<?php


class Circle
{
    public int $radius;
    public string $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function calculateArea()
    {
        return pi()*($this->radius*$this->radius);
    }

}