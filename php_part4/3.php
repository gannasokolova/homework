<?php

function arifmetic($a, $b, $c){
    if ((gettype($a) == integer || gettype($a) == double)
        && (gettype($b) == integer || gettype($b) == double)
        && (gettype($c) == integer || gettype($c) == double)){
        if ($c == 0){
            echo "Деление на 0 запрещено";
            return;
        }
        return ($a - $b) / $c;
    }
    else{
        echo "В функцию переданы не корректные значения параметров<br>";
    }
}

$a = arifmetic(10,3,2);
echo $a;