<?php
function res($a){
    if($a == 0){
        $res = "нулевое число";
        return $res;
    }
    $res = "";
    $res .= ($a > 0) ? "положительное" : "отрицательное";
    $res .= ($a % 2 == 0) ? " четное число" : " нечетное число";
    return $res;
}
echo res(0);