<?php
include "Circles.php";
include "Comparable.php";


class ComparableCircle extends Circles implements Comparable
{
    public function comPareto($objTwo): int
    {
        $circleTwoRadius = $objTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}