<?php
function del($arr, $p){
    $size = count($arr)-1;
    $i= 2;
    $b = $i*$p;
    while ($b <= $arr[$size]){
       unset($arr[array_search($b,$arr)]);
        $i++;
        $b = $i*$p;
    }
    if($i == 2){
        return false;
    }
    else{
        return $arr;
    }
}

function res($n){
    for($i = 2; $i <= $n; $i++){
        $arr[] = $i;
    }
    $p =2;
    do{

        $arr_1 = del($arr, $p);
        $arr = $arr_1 ? $arr_1 : $arr;
        $p = current($arr);
    }
    while($arr_1);
    return $arr;
}

$arr = res(50);
print_r($arr);