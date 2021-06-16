<?php
//include "ComparableCircle.php";
include "CircleComparator.php";

//$circleOne = new ComparableCircle('circle1',8);
//$circleTwo = new ComparableCircle('circle2',2);
//$circleThree = new ComparableCircle('circle3',4);
//$test=$circleThree->comPareto($circleOne);
//echo ('comparable: <br>');
//echo $test;


$circleOne= new Circles('circle1',6);
$circleTwo= new Circles('circle2',6);
$circleComparator= new CircleComparator();
var_dump($circleComparator->compare($circleOne,$circleTwo));