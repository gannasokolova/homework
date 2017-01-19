<?php

function res (array $arr){

    $res = array_sum($arr);
    return $res;
}
for ($i = 1; $i <= 20; $i++){
    $arr[]= rand(1,100);
}
$res = res($arr);
echo $res;