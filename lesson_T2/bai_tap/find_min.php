<?php
function findMin($arr){
    $min = $arr[0];
    for ($i=1;$i<count($arr);$i++){
        if ($min>$arr[$i]){
            $min=$arr[$i];
        }
    }
    return $min;
}
$arr1=[1,2,3,12,-45,8,9,7,99];
echo 'number min: '.findMin($arr1);
