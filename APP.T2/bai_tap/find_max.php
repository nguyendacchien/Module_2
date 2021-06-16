<?php
function findMax($arr){
    $max=$arr[0][0];
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr);$j++){
            if ($max<$arr[$i][$j]){
                $max=$arr[$i][$j];
            }
        }
    }
    return $max;
}
$arr1=[[1,2,3],[9,8,7],[99,67,35]];
echo 'is max: '.findMax($arr1);
