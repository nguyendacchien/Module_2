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
    <fieldset style="width: 25%">
        <legend>calculate</legend>
    is number_1: <input type="number" name="number_1" size="30"><br>
    operator:     <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value="/">/</option>
    </select><br>
    is number_2: <input type="number" name="number_2" size="30"><br>
    <input type="submit" value="calculate">
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number_1 =$_POST['number_1'];
    $number_2 =$_POST['number_2'];
    $operator = $_POST['operator'];
    $result=0;
    switch ($operator){
        case "+":
            $result = $number_1+$number_2;
            echo 'result: '.$number_1.' + '.$number_2.' = '.$result;
            break;
        case "-":
            $result = $number_1-$number_2;
            echo 'result: '.$number_1.' - '.$number_2.' = '.$result;
            break;
        case "x":
            $result = $number_1*$number_2;
            echo 'result: '.$number_1.' + '.$number_2.' = '.$result;
            break;
        case "/":
            if ($number_2==0||$number_1==0&&$number_2==0){
                echo 'result: '.$number_1 . ' / ' . $number_2 .' = by zero';
            }else {
                $result = $number_1 / $number_2;
                echo 'result: ' . $number_1 . ' / ' . $number_2 . ' = ' . $result;
            }

    }
}

