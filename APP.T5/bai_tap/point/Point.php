<?php


class Point
{
    protected float $x;
    protected float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function setXY(float $x, float $y): void
    {
        $this->x=$x;
        $this->y=$y;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    public function getXY(): array
    {
        return [$this->x, $this->y];
    }

    public function __toString():string
    {
        return "x la: ".$this->x."<br>"."y la: ".$this->y;
    }


}