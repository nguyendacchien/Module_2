<?php
include_once "Fruit.php";


class Apple extends Fruit
{
    public function howToEat(): string
    {
        return "Apple could be slided";
    }

}