<?php
function res($a, $b){
    if((gettype($a) == double || gettype($a) == integer)
        && (gettype($b) == double || gettype($b) == integer)){
        $c = sqrt(pow($a, 2) + pow ($b, 2));
        return $c;
    }
    else{
        return "Параметры в функция переданы не корректно";
    }
}

$c = res(3,4);
echo $c;
