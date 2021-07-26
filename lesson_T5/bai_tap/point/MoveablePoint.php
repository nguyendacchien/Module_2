<?php
include_once "Point.php";


class MoveablePoint extends Point
{
    protected float $xSeep;
    protected float $ySeep;

    public function __construct(float $x, float $y, float $xSeep, float $ySeep)
    {
        parent::__construct($x, $y);
        $this->xSeep=$xSeep;
        $this->ySeep=$ySeep;
    }

    /**
     * @param float $xSeep
     */
    public function setXSeep(float $xSeep): void
    {
        $this->xSeep = $xSeep;
    }

    /**
     * @param float $ySeep
     */
    public function setYSeep(float $ySeep): void
    {
        $this->ySeep = $ySeep;
    }

    /**
     * @return float
     */
    public function getXSeep(): float
    {
        return $this->xSeep;
    }

    /**
     * @return float
     */
    public function getYSeep(): float
    {
        return $this->ySeep;
    }


    public function getSeep(): array
    {
        return [$this->xSeep, $this->ySeep];
    }
    public function move(): MoveablePoint
    {
        $this->x=$this->x+$this->xSeep;
        $this->y=$this->y+$this->ySeep;
        return $this;
    }

    public function __toString(): string
    {
        return "x la: ".$this->x."<br>"."y la: ".$this->y."<br>"."xSeep la: ".$this->xSeep."<br>"."ySeep la: ".$this->ySeep;
    }
}