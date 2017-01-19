<?php

function count_arr (array  $arr){
    foreach ($arr as $value){
        $arr_count += 1;
    }
    return $arr_count;
}

$arr = [1, 2, 3, 4];
$b = [] ;
echo count_arr($arr)."<br>";
$c = count_arr($b);
var_dump($c);