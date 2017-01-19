<?php

function is_even(array $arr){
    foreach ($arr as $value){
        ($value % 2 == 0) ? $arr_1[] = $value : $arr_1;
    }
    return $arr_1;
}

var_dump(is_even([2, 3, 5, 10]));