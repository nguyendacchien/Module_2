<?php
$arr=[5,6,3,2,9,-1,10,23];
$min=$arr[0];
for ($i=1;$i<count($arr);$i++){
    if ($min>$arr[$i]){
        $min=$arr[$i];
    }
}
echo 'số bé nhất trong arr: '.$min;
