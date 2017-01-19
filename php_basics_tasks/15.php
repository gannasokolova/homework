<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 10.12.2016
 * Time: 14:41
 */
$a = 10;
$b = 10;
$operator = '/';

echo "a = {$a}, b = {$b}. ";

if((is_int($a) || is_float($a)) && (is_int($b) || is_float($b))){
    switch ($operator){
        case "+":
            echo "a + b = ",$a+$b;
            break;
        case "-":
            echo "a - b = ",$a-$b;
            break;
        case "*":
            echo "a * b = ",$a*$b;
            break;
        case "/":
            if($b){
                echo "a / b = ",$a/$b;
            }
            else{
                echo "Деление на 0 запрещено";
            }
        break;
        default:
            echo "Не известный оператор";
    }
}
else{
    echo "Одна из заданных переменных не является числом.";
}

