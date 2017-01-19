<?php
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 10.12.2016
 * Time: 14:11
 */
if(is_int($age)){
    if($age >= 18 && $age <= 59){
        echo "Вам еще работать и работать";
    }
    elseif($age > 59){
    echo "Вам пора на пенсию";
    }
}