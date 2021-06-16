<?php
include_once "Resizeable.php";


class Rectangle implements Resizeable
{
    public int $width;
    public int $height;
    public string $name;


    public function __construct(string $name, int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->name=$name;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getWidth(): int
    {
        return $this->width;
    }


    public function setWidth(int $width): void
    {
        $this->width = $width;
    }


    public function getHeight(): int
    {
        return $this->height;
    }


    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width*$this->height;
    }

    public function resize(int $percent)
    {
        $resize = ($this->calculateArea()*$percent)/100;
        return $this->calculateArea()+$resize;
    }
}