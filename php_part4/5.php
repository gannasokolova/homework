<?php

function is_even($a){
    if (gettype($a) == integer && $a % 2 == 0){
        return true;
    }
    elseif (gettype($a) == double || $a % 2 != 0){
        return false;
    }
    else{
        echo "В функцию передано не корректное значение параметра<br>";
    }
}

$c = is_even(15);
var_dump($c);
