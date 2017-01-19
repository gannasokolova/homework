<?php
function res($a){
    if((gettype($a) == integer || gettype($a) == double) && $a >0){
    if((fmod($a, 4) == 0 && fmod($a, 100) != 0)
    || fmod($a, 400) == 0){
        echo "количество дней в году: 366";
    }
    else{
        echo "количество дней в году: 365";
    }

    }
    else{
        echo "Параметры в функция переданы не корректно";
    }

}

res(2020);