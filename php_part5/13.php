<?php
function res ($a, $b, $c){
    if((gettype($a) == double || gettype($a) == integer)
        && (gettype($b) == double || gettype($b) == integer)
        && (gettype($c) == double || gettype($c) == integer)){
        if($a < ($b+$c) && $b < ($a+$c) && $c < ($a+$b)){
            echo "Треугольник существует.";
        }
        else{
            echo "Треугольник не существует.";
        }
    }
    else{
        echo "Параметры в функция переданы не корректно";
    }

}

res(3,6,5);