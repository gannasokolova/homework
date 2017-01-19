<?php

function closeToTen ($a, $b){
    $res1 = 10 - $a;
    $res2 = 10 - $b;
    $res = $res1 < $res2 ? $a : $b;
    echo $res;
}

closeToTen(2,-5);