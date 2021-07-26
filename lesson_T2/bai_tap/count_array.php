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
<form  method="get">
    <input type="text" name="str" placeholder="string">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    $str = $_REQUEST['str'];
    function counts($arr, $char)
    {
        $count = 0;
        for ($i = 0; $i < strlen($arr); $i++) {
            if ($arr[$i] === $char) {
                $count++;
            }
        }
        return $count;
    }
    echo 'arr: ' .$str.'<br>'.'số lần hiện ký tự a: '.counts($str, 'a');
}
