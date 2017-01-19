<?php

function res($a, $b, $c){
    $res = "";
    $res .= ($a == $b) ? "{$a} {$b}" : "";
    $res .= ($a == $c && $a != $b) ? "{$a} {$c}" : "";
    $res .= ($a == $c && $a == $b) ? " {$c}" : "";
    $res .= ($b == $c && $b!= $a) ? "{$c} {$b}" : "";
    return $res;

}

echo res(3,3,2);