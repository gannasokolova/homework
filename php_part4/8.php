<?php

function year($year){
    if(($year % 100 == 0 && $year % 400 == 0)|| ($year % 4 == 0 && $year % 100 != 0)) {
        return true;
    }
    return false;
}

$year = year(2016);
var_dump($year);

