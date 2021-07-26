<?php
function search( array $arr, int $num): bool
{
    $low = 0;
    $high = count($arr)-1;
    while ($low <=$high){
        $mid =($low+$high)/2;
        if ($arr[$mid]> $num){
            $high = $mid - 1;
        }elseif ($arr[$mid] < $num){
            $low = $mid+1;
        }else{
            return true;
        }
    }
    return false;
}
$number=0;
$arrs = range(1,10,1);
if (search($arrs,$number)){
    echo "bạn đã chọn đúng";
}else{
    echo "chúc bạn may mắn lần sau";
}


