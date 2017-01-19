<?php
function strReturn ($int, $str_1, $str_2, $str_3){
    if (!gettype($i) == integer || $i <= 0){
        switch ($int) {
            case 1:
                echo "{$int} {$str_1}";
                break;
            case 2:
            case 3:
            case 4:
                echo "{$int} {$str_2}";
                break;
            default:
                echo "{$int} {$str_3}";;
                break;
        }
    }
    else{
        echo "В функцию передано не корректное значение параметра<br>";
    }
}

strReturn(5, 'яблоко', 'яблока', 'яблок');