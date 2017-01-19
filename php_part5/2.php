<?php

function correctArray (array $arr, $per){
    if((gettype($per) == double || gettype($per) == integer) && $per > 0){
        $i = 0;
        foreach ($arr as $value){
            $arr[$i] = $value * $per;
            $i++;
        }
        return $arr;
    }
    else{
        return "Параметры в функция переданы не корректно";
    }
}


$arr = [10, 5, 15];

$arr_1 = correctArray($arr, 0.5);
print_r($arr_1);