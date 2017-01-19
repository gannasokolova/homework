<?php
function res($a, $b, $c){
    if((gettype($a) == double || gettype($a) == integer)
        && (gettype($b) == double || gettype($b) == integer)
        && (gettype($c) == double || gettype($c) == integer)){
        $d = $b * $b - 4 * $a * $c;
        switch ($d) {
            case $d < 0:
                echo "Корней нет";
                break;
            case $d == 0:
                $x1 = (-$b + sqrt($d)) / 2 * $a;
                echo res;
                break;
            case $d > 0:
                $x1 = (-$b + sqrt($d)) / 2 * $a;
                $x2 = (-$b - sqrt($d)) / 2 * $a;
                echo $x1 . "<br>" . $x2;
                break;
        }
    }
    else{
        return "Параметры в функция переданы не корректно";
    }
}

res (1,-2,-3);