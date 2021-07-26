<?php
include_once "Fruit.php";


class Orange extends Fruit
{
    public function howToEat(): string
    {
        return "Orange could be juiced";
    }

}