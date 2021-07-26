<?php




class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private  $speed = self::SLOW;
    private  $on = false;
    private  $radius = 5;
    private  $color = "blue";

    /**
     * Fan constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return float|int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius( $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor( $color)
    {
        $this->color = $color;
    }

     public function toString()
    {
        if ($this->isOn()) {
            return "Fan is on { Speed : " . $this->getSpeed() . " ,Radius : " . $this->getRadius() . " ,Color : " . $this->getColor()."}";
        }else{
            return "Fan is off {Radius : " . $this->getRadius() . " ,Color : " . $this->getColor()."}";
        }
    }
}