<?php

function month($i){
    $month = [
        1 => "Январь",
        "Февраль",
        "Март",
        "Апрель",
        "Май",
        "Июнь",
        "Июль",
        "Август",
        "Сентябрь",
        "Октябрь",
        "Ноябрь",
        "Декабрь"
    ];
    if(gettype($i) == integer && $i >0 && $i <= 12){
        return $month[$i];
    }
    else{
        echo "В функцию передано не корректное значение параметра<br>";
    }
}
            
echo month(7);