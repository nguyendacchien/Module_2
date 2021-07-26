<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="a" placeholder="input a"><br>
    <input type="number" name="b" placeholder="input b"><br>
    <input type="number" name="c" placeholder="input c"><br>
    <input type="submit" value="calculate">
</form>
</body>
</html>
<?php
include_once "QuadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_REQUEST['a'];
    $b=$_REQUEST['b'];
    $c=$_REQUEST['c'];
    $equation = new QuadraticEquation($a, $b, $c);
    try {
        if($equation->getDiscriminant()<0){
            echo "The equation has no real roots ";
        }elseif ($equation->getDiscriminant()==0){
            echo "The equation has double root is ".$equation->getDoubleRoot1();
        }else{
            echo "The Equation has two roots are ".$equation->getRoot1()." and ".$equation->getRoot2();
        }
    }catch (Exception $e){
        echo "Error : ".$e->getMessage();
    }
}
?>