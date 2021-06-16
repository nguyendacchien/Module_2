<?php
include "Tiger.php";
include "Chicken.php";
include "Apple.php";
include "Orange.php";

echo ("---- Animal<br>");
$animals[0]=new Tiger();
$animals[1]=new Chicken();
foreach ($animals as $animal)
{
    echo $animal->makeSound()."<br>";
    if ($animal instanceof Chicken)
    {
        echo $animal->howToEat();
    }
}


echo ("<br>----fruits<br>");
$fruits[0]=new Apple();
$fruits[1]=new Orange();
foreach ($fruits as $fruit)
{
    echo $fruit->howToEat()."<br>";

}