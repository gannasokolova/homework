<?php
function checkInterval ($a){
if(gettype($a) == integer && $a >= 50 && $a <= 100){
    echo "Число а содержится в интервале";
}
elseif (gettype($a) == integer){
    echo "Число а не содержится в интервале";
}
else{
    echo "Параметры в функция переданы не корректно";
}
}

checkInterval(51);