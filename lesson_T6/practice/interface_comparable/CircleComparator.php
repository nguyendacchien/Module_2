<?php
include "Circles.php";
include "Comparator.php";


class CircleComparator implements Comparator
{
    public function compare(object $circleOne, object $circleTwo)
    {
        $circleOne = $circleOne->getRadius();
        $circleTwo = $circleTwo->getRadius();

        if ($circleOne>$circleTwo){
            return 1;
        }else if ($circleOne<$circleTwo){
            return -1;
        } else {
            return 0;
        }
    }
}