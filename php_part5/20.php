<?php
function res($a){
    $res = "";
    if ($a <= 0 || $a > 999){
        return $res;
    }
    $res .= ($a % 2 == 0) ? "четное" : "нечетное";
    switch ($a){
        case $a <10:
            $res .= " однозначное число";
            break;
        case $a >=10 && $a <100:
            $res .= " двузначное число";
            break;
        case $a > 99:
            $res .= " трехзначное  число";
            break;
    }
    return $res;
}

echo res(5);