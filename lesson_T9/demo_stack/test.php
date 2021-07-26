<?php
include_once "ReadingList.php";
try {

    $myBooks = new ReadingList();
    $myBooks->push('A Dream of Spring');
    $myBooks->push('The Winds of Winter');
    $myBooks->push('A Dance with Dragons');
    $myBooks->push('A Feast for Crows');
    $myBooks->push('A Storm of Swords');
    $myBooks->push('A Clash of Kings');
    $myBooks->push('A Game of Thrones');
    $myBooks->pop();
    echo "<pre>";
    var_dump($myBooks);
    echo $myBooks->top();
}catch (Exception $e){
    echo $e->getMessage();
    echo $e->getLine();
    echo $e->getFile();
}
//echo "<pre>";
//print_r($myBooks->getStack());
//print_r($myBooks->getStack());
