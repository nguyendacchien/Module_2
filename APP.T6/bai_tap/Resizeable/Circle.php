<?php
include_once "Resizeable.php";


class Circle implements Resizeable
{
    public int $radius;
    public string $name;


    public function __construct(string $name, int $radius)
    {
        $this->radius = $radius;
        $this->name= $name;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getRadius(): int
    {
        return $this->radius;
    }


    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function calculateArea(): int
    {
        return pi()* $this->radius*$this->radius;
    }



    public function resize(int $percent): int
    {
        $resize = ($this->calculateArea()*$percent)/self::PERCENT;
        return $this->calculateArea()+$resize;
    }
}