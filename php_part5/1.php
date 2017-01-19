<?php

function speed($s, $t, $str = "km"){
    if ((gettype($s) == double || gettype($s) == integer)
        && (gettype($t) == double || gettype($t) == integer)
        && ($str != "km" || $str != "m")){
            if($str == "km"){
                return $s/$t." km/h";
            }
            else{
                return ($s*1000/$t*3600)." m/s";
            }
        }
    else{
        return "Параметры в функция переданы не корректно";
    }
}

$str = speed (5, 3.6, "m");
echo $str;