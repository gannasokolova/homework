<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 10.12.2016
 * Time: 14:54
 */
$a = 10;
$b = 10;
echo "Переменные: a = {$a}, b = {$b}. Результат: ";

if((is_int($a) || is_float($a)) && (is_int($b) || is_float($b))){
    if($a > $b){
        echo "Max: a = {$a}";
    }
    elseif ($a < $b){
        echo "Max: b = {$b}";
    }
    else{
        echo "a = b = {$a}";
    }
}
else{
    echo "Одна из заданных переменных не является числом.";
}