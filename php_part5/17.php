<?php

function res($a, $b, $c){
    $res = "";
    $res .= ($a == $b) ? "3" : "";
    $res .= ($a == $c) ? "2" : "";
    $res .= ($b == $c) ? "1" : "";
    return $res;

}

echo res(3,2,2);